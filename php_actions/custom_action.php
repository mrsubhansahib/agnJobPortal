<?php
session_start(); // Start the session

include "../includes/db_conn.php";
include "../includes/function.php";

// Check if the form is submitted
if (isset($_REQUEST['candidate_name']) && isset($_FILES['resume_cv']['name'])) {
    $error='';
    $type = explode('.', $_FILES['resume_cv']['name']);
    $type = end($type); // Get the file extension
    $pic = uniqid(rand()) . '.' . $type;
    $uploadPath = "../img/uploaded_images/" . basename($pic);

    $check = countWhen($dbc, 'candidates_info', 'candidate_email', @$_REQUEST['candidate_email']);
    if ($check) {
        $response = [
            'sts' => 'warning',
            'msg' => 'Applicant Already Exists'
        ];
    } else {
        $allowedExtensions = ['pdf', 'docx']; // Allow PDF and DOCX file types
        $uploadedFile = $_FILES['resume_cv']['name'];
        $fileExtension = pathinfo($uploadedFile, PATHINFO_EXTENSION);

        if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
            $response = [
                'sts' => 'warning',
                'msg' => 'Only PDF or DOCX files are allowed'
            ];
        } else {
            $moved = move_uploaded_file($_FILES["resume_cv"]["tmp_name"], $uploadPath);
            
            if ($moved) {

                $file_name = $_FILES["resume_cv"]['name'];
                $temp_name = $_FILES["resume_cv"]['tmp_name'];
                $file = explode('.', $file_name);
                $ext = end($file);

                if ($ext == "docx") {
                    require '../vendor/autoload.php';

                    $phpWord = \PhpOffice\PhpWord\IOFactory::load($uploadPath);

                    // Regular expression for email addresses

                    $emailPattern = '/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i';

                    // Regular expression for Pakistani phone numbers
                    $phonePattern = '/\b03[0-9]{2}[- ]?[0-9]{7}\b/';

                    $newEmail = 'agnjobbank@yahoo.com';
                    $newPhone = '0303-7774400';
                    $textUpdated = false;

                    foreach ($phpWord->getSections() as $section) {
                        foreach ($section->getElements() as $element) {
                            if ($element instanceof \PhpOffice\PhpWord\Element\Text) {
                                $text = $element->getText();
                                if (preg_match($emailPattern, $text)) {
                                    $text = preg_replace($emailPattern, $newEmail, $text);
                                    $element->setText($text);
                                    $textUpdated = true;
                                }
                                if (preg_match($phonePattern, $text)) {
                                    $text = preg_replace($phonePattern, $newPhone, $text);
                                    $element->setText($text);
                                    $textUpdated = true;
                                }
                            } elseif ($element instanceof \PhpOffice\PhpWord\Element\TextRun) {
                                foreach ($element->getElements() as $textElement) {
                                    if ($textElement instanceof \PhpOffice\PhpWord\Element\Text) {
                                        $text = $textElement->getText();
                                        if (preg_match($emailPattern, $text)) {
                                            $text = preg_replace($emailPattern, $newEmail, $text);
                                            $textElement->setText($text);
                                            $textUpdated = true;
                                        }
                                        if (preg_match($phonePattern, $text)) {
                                            $text = preg_replace($phonePattern, $newPhone, $text);
                                            $textElement->setText($text);
                                            $textUpdated = true;
                                        }
                                    }
                                }
                            }
                        }
                    }

                    if ($textUpdated) {
                        // Generate a random file name
                        $randomFileName = uniqid('edited_file_', true) . '.docx';

                        // Save the modified document
                        $newFilePath = '../img/edited_file/' . $randomFileName;

                        $xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
                        $xmlWriter->save($newFilePath);

                        // echo '<br>New document created: ' . $newFilePath;
                        $NewResumePath = $newFilePath;
                    } else {
                        // echo 'No Changes Found in the docx file';
                    }
                } else if ($ext == 'pdf') {
                    $curl = curl_init();
                    $url = 'https://pdf.agnjobbank.com?file_name=' . $pic;
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_HEADER, 0);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

                    $res = curl_exec($curl);
                   
                    if (curl_errno($curl)) {
                        $error= 'Error:' . curl_error($curl);
                    } else {
                        $NewResumePath = $res;
                    }
                    curl_close($curl);
                } else {
                    echo 'File is not a docx or pdf  file';
                }
                if (!$NewResumePath) {
                    $NewResumePath = '';
                }
                // Database insertion logic
                $data = [
                    'candidate_name' => $_REQUEST['candidate_name'],
                    'candidate_email' => $_REQUEST['candidate_email'],
                    'candidate_phone' => $_REQUEST['candidate_phone'],
                    'candidate_age' => $_REQUEST['candidate_age'],
                    'candidate_location' => $_REQUEST['candidate_location'],
                    'candidate_cnic' => $_REQUEST['candidate_cnic'],
                    'candidate_education' => $_REQUEST['c_p_education'],
                    'apply_for' => $_REQUEST['postname'],
                    'department' => $_REQUEST['department'],
                    'candidate_experience' => $_REQUEST['exp_details'],
                    'candidate_resume' => $pic,
                    'candidate_agreement' => $_REQUEST['contract'],
                    'ref_name' => $_REQUEST['refrencename'],
                    'ref_contact' => $_REQUEST['RefrenceContact'],
                    'exp_duration' => $_REQUEST['exp_duration'],
                    'ref_designation' => $_REQUEST['Designation'],
                    'new_resume' => $NewResumePath,
                    'status' => 1,
                    'appointed' => '',
                    'email_2' => '',
                    'phone_no2' => '',
                    'summary' => '',
                    'exp_description' => '',
                    'user_id' => '',
                ];

                if (insert_data($dbc, "candidates_info", $data)) {
                    $response = [
                        'sts' => 'success',
                        'msg' => 'Form submitted Successfully'
                    ];
                } else {
                    $response = [
                        'sts' => 'warning',
                        'msg' => 'Something went wrong'
                    ];
                }
            } else {
                $response = [
                    'sts' => 'warning',
                    'msg' => 'File upload failed'
                ];
            }
        }
    }
    echo json_encode($response);
}
