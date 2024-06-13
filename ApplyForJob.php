<?php
include "includes/header.php";
?>
<style>
    .add_remove {
        /* display: flex !important;
        align-items: end !important; */
        margin-top: 30px;
    }

    .outline_none {
        outline: none !important;
        background-color: #fff !important;
        border: none !important;
    }

    .contract {
        color: black !important;
        line-height: 1.5 !important;
        font-size: 15px;
        word-spacing: 1px;
        font-weight: bolder;
        font-family: system-ui;
    }

    .contract_check {
        display: flex;
    }

    .fw-normal {
        font-weight: normal;
        margin: 0px 5px 0px 10px;
    }

    .fw-normal a {
        color: blue;

    }

    /* Target the Select2 dropdown */
    .select2-container--default .select2-selection--single {
        height: 45px;
        border: 1px solid #ced4da;
        border-radius: 2px;
    }

    .select2-selection__arrow {
        height: 45px;
        padding: 9px 0px;
        border-radius: 2px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 45px;
        position: absolute;
        top: 1px;
        right: 1px;
        width: 20px;
    }

    .select2-selection__rendered {
        color: #6b797c;
        padding: 9px 15px;
        border: none;
        border-radius: 2px;
        height: auto;
        line-height: 1.5;
        font-size: 16px;
        height: 60px;
    }
</style>
<!-- Main jumbotron for a primary marketing message or call to action -->
<section class="inner-banner" style="background: url('img/applyjob.jpg');">
    <div class="container">
        <div class="caption">
            <h2>Get your jobs</h2>
            <p>Get your Popular jobs <span><?php echo rand(100, 999); ?> New job</span></p>
            <p>The Largest Private Jobs and staff providing Agency in Pakistan</p>
        </div>
    </div>
</section>

<section class="jobs">
    <div class="container">
        <!-- ============================================================ -->
        <div class="row font-weight-semibold">
            <h3>Personal Information</h3>
        </div>
        <div class="companies">
            <div class="container">
                <form class="form-horizontal" id="formData"  method="post">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="name" class="control-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="candidate_name" placeholder="Enter your name" required>
                        </div>

                        <div class="col-sm-6">
                            <label for="email" class="control-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="candidate_email" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="phone" class="control-label">Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" name="candidate_phone" placeholder="Enter your phone number" required>
                        </div>

                        <div class="col-sm-6">
                            <label for="age" class="control-label">Age:</label>
                            <input type="number" class="form-control" id="age" name="candidate_age" placeholder="Enter your age" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="location" class="control-label">Location:</label>
                            <select class="form-control" id="location" name="candidate_location" required>
                                <option value="" disabled selected>Select The City</option>
                                <option value="Islamabad">Islamabad</option>
                                <option value="" disabled>Punjab Cities</option>
                                <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                                <option value="Ahmadpur East">Ahmadpur East</option>
                                <option value="Ali Khan Abad">Ali Khan Abad</option>
                                <option value="Alipur">Alipur</option>
                                <option value="Arifwala">Arifwala</option>
                                <option value="Attock">Attock</option>
                                <option value="Bhera">Bhera</option>
                                <option value="Bhalwal">Bhalwal</option>
                                <option value="Bahawalnagar">Bahawalnagar</option>
                                <option value="Bahawalpur">Bahawalpur</option>
                                <option value="Bhakkar">Bhakkar</option>
                                <option value="Burewala">Burewala</option>
                                <option value="Chillianwala">Chillianwala</option>
                                <option value="Chakwal">Chakwal</option>
                                <option value="Chichawatni">Chichawatni</option>
                                <option value="Chiniot">Chiniot</option>
                                <option value="Chishtian">Chishtian</option>
                                <option value="Daska">Daska</option>
                                <option value="Darya Khan">Darya Khan</option>
                                <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                <option value="Dhaular">Dhaular</option>
                                <option value="Dina">Dina</option>
                                <option value="Dinga">Dinga</option>
                                <option value="Dipalpur">Dipalpur</option>
                                <option value="Faisalabad">Faisalabad</option>
                                <option value="Ferozewala">Ferozewala</option>
                                <option value="Fateh Jhang">Fateh Jang</option>
                                <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                                <option value="Gojra">Gojra</option>
                                <option value="Gujranwala">Gujranwala</option>
                                <option value="Gujrat">Gujrat</option>
                                <option value="Gujar Khan">Gujar Khan</option>
                                <option value="Hafizabad">Hafizabad</option>
                                <option value="Haroonabad">Haroonabad</option>
                                <option value="Hasilpur">Hasilpur</option>
                                <option value="Haveli Lakha">Haveli Lakha</option>
                                <option value="Jatoi">Jatoi</option>
                                <option value="Jalalpur">Jalalpur</option>
                                <option value="Jattan">Jattan</option>
                                <option value="Jampur">Jampur</option>
                                <option value="Jaranwala">Jaranwala</option>
                                <option value="Jhang">Jhang</option>
                                <option value="Jhelum">Jhelum</option>
                                <option value="Kalabagh">Kalabagh</option>
                                <option value="Karor Lal Esan">Karor Lal Esan</option>
                                <option value="Kasur">Kasur</option>
                                <option value="Kamalia">Kamalia</option>
                                <option value="Kamoke">Kamoke</option>
                                <option value="Khanewal">Khanewal</option>
                                <option value="Khanpur">Khanpur</option>
                                <option value="Kharian">Kharian</option>
                                <option value="Khushab">Khushab</option>
                                <option value="Kot Addu">Kot Addu</option>
                                <option value="Jauharabad">Jauharabad</option>
                                <option value="Lahore">Lahore</option>
                                <option value="Lalamusa">Lalamusa</option>
                                <option value="Layyah">Layyah</option>
                                <option value="Liaquat Pur">Liaquat Pur</option>
                                <option value="Lodhran">Lodhran</option>
                                <option value="Malakwal">Malakwal</option>
                                <option value="Mamoori">Mamoori</option>
                                <option value="Mailsi">Mailsi</option>
                                <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                <option value="Mian Channu">Mian Channu</option>
                                <option value="Mianwali">Mianwali</option>
                                <option value="Multan">Multan</option>
                                <option value="Murree">Murree</option>
                                <option value="Muridke">Muridke</option>
                                <option value="Mianwali Bangla">Mianwali Bangla</option>
                                <option value="Muzaffargarh">Muzaffargarh</option>
                                <option value="Narowal">Narowal</option>
                                <option value="Nankana Sahib">Nankana Sahib</option>
                                <option value="Okara">Okara</option>
                                <option value="Renala Khurd">Renala Khurd</option>
                                <option value="Pakpattan">Pakpattan</option>
                                <option value="Pattoki">Pattoki</option>
                                <option value="Pir Mahal">Pir Mahal</option>
                                <option value="Qaimpur">Qaimpur</option>
                                <option value="Qila Didar Singh">Qila Didar Singh</option>
                                <option value="Rabwah">Rabwah</option>
                                <option value="Raiwind">Raiwind</option>
                                <option value="Rajanpur">Rajanpur</option>
                                <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                <option value="Rawalpindi">Rawalpindi</option>
                                <option value="Sadiqabad">Sadiqabad</option>
                                <option value="Safdarabad">Safdarabad</option>
                                <option value="Sahiwal">Sahiwal</option>
                                <option value="Sangla Hill">Sangla Hill</option>
                                <option value="Sarai Alamgir">Sarai Alamgir</option>
                                <option value="Sargodha">Sargodha</option>
                                <option value="Shakargarh">Shakargarh</option>
                                <option value="Sheikhupura">Sheikhupura</option>
                                <option value="Sialkot">Sialkot</option>
                                <option value="Sohawa">Sohawa</option>
                                <option value="Soianwala">Soianwala</option>
                                <option value="Siranwali">Siranwali</option>
                                <option value="Talagang">Talagang</option>
                                <option value="Taxila">Taxila</option>
                                <option value="Toba Tek Singh">Toba Tek Singh</option>
                                <option value="Vehari">Vehari</option>
                                <option value="Wah Cantonment">Wah Cantonment</option>
                                <option value="Wazirabad">Wazirabad</option>
                                <option value="" disabled>Sindh Cities</option>
                                <option value="Badin">Badin</option>
                                <option value="Bhirkan">Bhirkan</option>
                                <option value="Rajo Khanani">Rajo Khanani</option>
                                <option value="Chak">Chak</option>
                                <option value="Dadu">Dadu</option>
                                <option value="Digri">Digri</option>
                                <option value="Diplo">Diplo</option>
                                <option value="Dokri">Dokri</option>
                                <option value="Ghotki">Ghotki</option>
                                <option value="Haala">Haala</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Islamkot">Islamkot</option>
                                <option value="Jacobabad">Jacobabad</option>
                                <option value="Jamshoro">Jamshoro</option>
                                <option value="Jungshahi">Jungshahi</option>
                                <option value="Kandhkot">Kandhkot</option>
                                <option value="Kandiaro">Kandiaro</option>
                                <option value="Karachi">Karachi</option>
                                <option value="Kashmore">Kashmore</option>
                                <option value="Keti Bandar">Keti Bandar</option>
                                <option value="Khairpur">Khairpur</option>
                                <option value="Kotri">Kotri</option>
                                <option value="Larkana">Larkana</option>
                                <option value="Matiari">Matiari</option>
                                <option value="Mehar">Mehar</option>
                                <option value="Mirpur Khas">Mirpur Khas</option>
                                <option value="Mithani">Mithani</option>
                                <option value="Mithi">Mithi</option>
                                <option value="Mehrabpur">Mehrabpur</option>
                                <option value="Moro">Moro</option>
                                <option value="Nagarparkar">Nagarparkar</option>
                                <option value="Naudero">Naudero</option>
                                <option value="Naushahro Feroze">Naushahro Feroze</option>
                                <option value="Naushara">Naushara</option>
                                <option value="Nawabshah">Nawabshah</option>
                                <option value="Nazimabad">Nazimabad</option>
                                <option value="Qambar">Qambar</option>
                                <option value="Qasimabad">Qasimabad</option>
                                <option value="Ranipur">Ranipur</option>
                                <option value="Ratodero">Ratodero</option>
                                <option value="Rohri">Rohri</option>
                                <option value="Sakrand">Sakrand</option>
                                <option value="Sanghar">Sanghar</option>
                                <option value="Shahbandar">Shahbandar</option>
                                <option value="Shahdadkot">Shahdadkot</option>
                                <option value="Shahdadpur">Shahdadpur</option>
                                <option value="Shahpur Chakar">Shahpur Chakar</option>
                                <option value="Shikarpaur">Shikarpaur</option>
                                <option value="Sukkur">Sukkur</option>
                                <option value="Tangwani">Tangwani</option>
                                <option value="Tando Adam Khan">Tando Adam Khan</option>
                                <option value="Tando Allahyar">Tando Allahyar</option>
                                <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                <option value="Thatta">Thatta</option>
                                <option value="Umerkot">Umerkot</option>
                                <option value="Warah">Warah</option>
                                <option value="" disabled>Khyber Cities</option>
                                <option value="Abbottabad">Abbottabad</option>
                                <option value="Adezai">Adezai</option>
                                <option value="Alpuri">Alpuri</option>
                                <option value="Akora Khattak">Akora Khattak</option>
                                <option value="Ayubia">Ayubia</option>
                                <option value="Banda Daud Shah">Banda Daud Shah</option>
                                <option value="Bannu">Bannu</option>
                                <option value="Batkhela">Batkhela</option>
                                <option value="Battagram">Battagram</option>
                                <option value="Birote">Birote</option>
                                <option value="Chakdara">Chakdara</option>
                                <option value="Charsadda">Charsadda</option>
                                <option value="Chitral">Chitral</option>
                                <option value="Daggar">Daggar</option>
                                <option value="Dargai">Dargai</option>
                                <option value="Darya Khan">Darya Khan</option>
                                <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                <option value="Doaba">Doaba</option>
                                <option value="Dir">Dir</option>
                                <option value="Drosh">Drosh</option>
                                <option value="Hangu">Hangu</option>
                                <option value="Haripur">Haripur</option>
                                <option value="Karak">Karak</option>
                                <option value="Kohat">Kohat</option>
                                <option value="Kulachi">Kulachi</option>
                                <option value="Lakki Marwat">Lakki Marwat</option>
                                <option value="Latamber">Latamber</option>
                                <option value="Madyan">Madyan</option>
                                <option value="Mansehra">Mansehra</option>
                                <option value="Mardan">Mardan</option>
                                <option value="Mastuj">Mastuj</option>
                                <option value="Mingora">Mingora</option>
                                <option value="Nowshera">Nowshera</option>
                                <option value="Paharpur">Paharpur</option>
                                <option value="Pabbi">Pabbi</option>
                                <option value="Peshawar">Peshawar</option>
                                <option value="Saidu Sharif">Saidu Sharif</option>
                                <option value="Shorkot">Shorkot</option>
                                <option value="Shewa Adda">Shewa Adda</option>
                                <option value="Swabi">Swabi</option>
                                <option value="Swat">Swat</option>
                                <option value="Tangi">Tangi</option>
                                <option value="Tank">Tank</option>
                                <option value="Thall">Thall</option>
                                <option value="Timergara">Timergara</option>
                                <option value="Tordher">Tordher</option>
                                <option value="" disabled>Balochistan Cities</option>
                                <option value="Awaran">Awaran</option>
                                <option value="Barkhan">Barkhan</option>
                                <option value="Chagai">Chagai</option>
                                <option value="Dera Bugti">Dera Bugti</option>
                                <option value="Gwadar">Gwadar</option>
                                <option value="Harnai">Harnai</option>
                                <option value="Jafarabad">Jafarabad</option>
                                <option value="Jhal Magsi">Jhal Magsi</option>
                                <option value="Kacchi">Kacchi</option>
                                <option value="Kalat">Kalat</option>
                                <option value="Kech">Kech</option>
                                <option value="Kharan">Kharan</option>
                                <option value="Khuzdar">Khuzdar</option>
                                <option value="Killa Abdullah">Killa Abdullah</option>
                                <option value="Killa Saifullah">Killa Saifullah</option>
                                <option value="Kohlu">Kohlu</option>
                                <option value="Lasbela">Lasbela</option>
                                <option value="Lehri">Lehri</option>
                                <option value="Loralai">Loralai</option>
                                <option value="Mastung">Mastung</option>
                                <option value="Musakhel">Musakhel</option>
                                <option value="Nasirabad">Nasirabad</option>
                                <option value="Nushki">Nushki</option>
                                <option value="Panjgur">Panjgur</option>
                                <option value="Pishin Valley">Pishin Valley</option>
                                <option value="Quetta">Quetta</option>
                                <option value="Sherani">Sherani</option>
                                <option value="Sibi">Sibi</option>
                                <option value="Sohbatpur">Sohbatpur</option>
                                <option value="Washuk">Washuk</option>
                                <option value="Zhob">Zhob</option>
                                <option value="Ziarat">Ziarat</option>
                            </select>
                            <!-- <input type="text" class="form-control" id="location" name="candidate_location" placeholder="Enter your location" required> -->
                        </div>

                        <div class="col-sm-6">
                            <label for="cnic" class="control-label">CNIC:</label>
                            <input type="text" class="form-control" id="cnic" name="candidate_cnic" placeholder="Enter your CNIC" required>
                        </div>
                    </div>

                    <!-- ============================================================ -->
                    <div class="row font-weight-semibold">
                        <h3>Educational Profile</h3>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="c_p_education" class="control-label">Recent Completed Education:</label>
                            <input type="text" class="form-control" id="c_p_education" name="c_p_education" placeholder="Recent Completed Education" required>
                        </div>
                    </div>
                    <!-- ============================================================ -->
                    <div class="row font-weight-semibold">
                        <h3>Applying For</h3>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="postname" class="control-label">Name of Post:</label>
                            <input type="text" class="form-control" id="postname" name="postname" placeholder="Enter Post Name" required>
                        </div>

                        <div class="col-sm-6">
                            <label for="cnic" class="control-label">Department:</label>
                            <select class="form-control" name="department" id="department">
                                <option value="">Select Department</option>
                                <?php
                                $job_cat = mysqli_query($dbc, "SELECT * FROM `job_type`");

                                if (mysqli_num_rows($job_cat) > 0) :
                                    $a = 1;
                                    while ($row = mysqli_fetch_assoc($job_cat)) :
                                ?>
                                        <option value="<?= $row['category_id'] ?>"><?= ucwords($row['category_name']) ?></option>
                                <?php
                                        $a++;
                                    endwhile;
                                endif;
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- ============================================================ -->
                    <div class="row font-weight-semibold">
                        <h3>Experience</h3>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="postname" class="control-label">Experience Duration:</label>
                            <select class="form-control" name="exp_duration" id="exp_duration">
                                <option value="">Select Experience</option>
                                <option value="fresh">Fresher</option>
                                <option value="1">1 Year</option>
                                <option value="2">2 Year</option>
                                <option value="3">3 Year</option>
                                <option value="4">4 Year</option>
                                <option value="5">5 Year</option>
                                <option value="6">6 Year</option>
                                <option value="7">7 Year</option>
                                <option value="8">8 Year</option>
                                <option value="9">9 Year</option>
                                <option value="10">10 Year</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="Description" class="control-label">Description:</label>
                            <textarea placeholder="Tell us about your job experience" name="exp_details" id="exp_details" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="Resume" class="control-label">Resume: <span class="fw-normal">Don't have ?<a target="_blank" href="http://freecvbuilders.com/">Click here to create..!</a></span></label>
                            <input class="form-control form-control-lg d-flex align-items-center" name="resume_cv" id="resume_cv" type="file" required />
                        </div>
                    </div>
                    <!-- ============================================================ -->
                    <div class="row font-weight-semibold">
                        <h3>Contract</h3>
                    </div>
                    <div class="col-sm-12">
                        <p class="contract">
                            I promise that AGN Job Bank, which will provide me a job after receiving the first salary including all kinds of bonuses, I will pay 50% of the first salary to them (if I leave the job after one month or within the month, rules will be applicable as per the first half).
                        </p>
                        <p class="contract">
                            "میں وعدہ کرتا ہوں کہ ای جی این جاب بینک جو مجھے پہلی تنخواہ موصول ہونے کے بعد نوکری فراہم کرے گی اور تمام قسم کے بونس شامل ہوں گے، میں ان کو اپنی پہلی تنخواہ کا 50٪ ادا کروں گا۔ (اگر میں ایک مہینے کے اندر یا ایک مہینے کے بعد نوکری چھوڑ دوں تو قواعد پہلے نصف کے مطابق لاگو ہوں گے۔)"
                        </p>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="contract" class="control-label">Contract:</label>
                            <div class="row contract_check">
                                <div>
                                    <input class="form-check-input" type="radio" id="contractyes" name="contract" value="accept">
                                    <label style="color: black !important;margin:0px 10px 0px 5px;" class="m-0 form-check-label" for="contractyes">
                                        Accept
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="radio" id="contractno" name="contract" value="reject">
                                    <label style="color: black !important;margin:0px 10px 0px 5px;" class="m-0 form-check-label" for="contractno">
                                        Reject
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================ -->
                    <div class="row font-weight-semibold">
                        <h3>Reference</h3>
                    </div>
                    <div class="col-sm-12">
                        <p class="contract">
                            if you have any reference the fill below if no the left it blank
                        </p>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="refrencename" class="control-label">Refrence Name:</label>
                            <input type="tel" class="form-control" id="refrencename" name="refrencename" placeholder="Enter Refrence Name">
                        </div>

                        <div class="col-sm-4">
                            <label for="RefrenceContact" class="control-label">Refrence Contact:</label>
                            <input type="number" class="form-control" id="RefrenceContact" name="RefrenceContact" placeholder="Enter Refrence Contact">
                        </div>

                        <div class="col-sm-4">
                            <label for="Designation" class="control-label">Designation:</label>
                            <input type="text" class="form-control" id="Designation" name="Designation" placeholder="Enter Refrence Designation">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12 btn-xl">
                            <!-- <button type="submit" class="btn brows-btn">Submit</button> -->
                            <button type="submit" id="inv_btn" class="btn brows-btn">
                                <span id="loader_code" class="spinner-border d-none" style="width: 1.5rem !important;height: 1.5rem !important;"></span>
                                <span id="text_code" class="">Submit</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
include "includes/footer.php";
?>