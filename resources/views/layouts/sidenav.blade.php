<div class="container-fluid">
    <div class="row">
        <div class="admin-nav p-0">
            <h4 class="text-light text-center p-2">Admin Panel</h4>

            <div class="list-group list-group-flush nav-side-menu">

                <div class="menu-list">
                    <ul id="menu-content" class="menu-content collapse out">
                        <li>
                            <a href="admin-dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="admin-departments.php"><i class="fas fa-building"></i> Departments</a>
                        </li>

{{--                        <li>--}}
{{--                            <a href="admin-patient.php"><i class="fas fa-stethoscope"></i> Out Patient</a>--}}
{{--                        </li>--}}

                        <li  data-toggle="collapse" data-target="#doctor" class="collapsed">
                            <a href="#"><i class="fas fa-user-md"></i> Doctor <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="doctor">
                            <li class="active"><a href="admin-doctorCreated.php">Create Doctors</a></li>
                            <li><a href="admin-doctorList.php">Doctors List</a></li>
                            <li><a href="admin-doctorAppointement.php">Doctor Appointement</a></li>
                        </ul>

                        <li  data-toggle="collapse" data-target="#schedule" class="collapsed">
                            <a href="#"><i class="fas fa-user-md"></i> Doctor Schedule <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="schedule">
                            <li class="active"><a href="admin-doctorsTimeSchedule.php">All Schedule</a></li>
                            <li><a href="admin-doctorsHoliday.php">Holiday</a></li>
                        </ul>

                        <li>
                            <a href="admin-appointmentPatient.php"><i class="fas fa-user-injured"></i> Appointment Patient</a>
                        </li>

                        <li  data-toggle="collapse" data-target="#human-resources" class="collapsed">
                            <a href="#"><i class="fas fa-users-cog"></i> Human Resources <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="human-resources">
                            <li class="active"><a href="admin-staff.php">Add Staff</a></li>
                            <li><a href="admin-staffAll.php">All Staff</a></li>
                            <li><a href="#">Accountant List</a></li>
                            <li><a href="#">Nourse List</a></li>
                            <li><a href="#">Receptionist List</a></li>
                        </ul>

                        <li  data-toggle="collapse" data-target="#bed-manager" class="collapsed">
                            <a href="#"><i class="fas fa-procedures"></i> Bed Manager <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="bed-manager">
                            <li class="active"><a href="admin-bed.php">Bed Assign</a></li>
                            <li><a href="admin-bedList.php">Bed List</a></li>
                            <li><a href="admin-bedType.php">Bed Type</a></li>
                        </ul>

                        <li  data-toggle="collapse" data-target="#billing" class="collapsed">
                            <a href="#"><i class="fas fa-money-bill"></i> Billing <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="billing">
                            <li class="active"><a href="#">RFT-H1</a></li>
                            <li><a href="#">RFT-H2</a></li>
                            <li><a href="#">BTB-H1</a></li>
                            <li><a href="#">BTB-H2</a></li>
                        </ul>

                        <li  data-toggle="collapse" data-target="#test" class="collapsed">
                            <a href="#"><i class="fas fa-vials"></i> Test <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="test">
                            <li class="active"><a href="#">RFT-H1</a></li>
                            <li><a href="#">RFT-H2</a></li>
                            <li><a href="#">BTB-H1</a></li>
                            <li><a href="#">BTB-H2</a></li>
                        </ul>

                        <li  data-toggle="collapse" data-target="#lab" class="collapsed">
                            <a href="#"><i class="fas fa-flask"></i> Lab <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="lab">
                            <li class="active"><a href="#">RFT-H1</a></li>
                            <li><a href="#">RFT-H2</a></li>
                            <li><a href="#">BTB-H1</a></li>
                            <li><a href="#">BTB-H2</a></li>
                        </ul>

                        <li>
                            <a href="admin-healthCard.php"><i class="fas fa-h-square"></i> Health Card</a>
                        </li>

                        <li>
                            <a href="admin-ambulance.php"><i class="fas fa-ambulance"></i> Ambulance</a>
                        </li>

                        <li  data-toggle="collapse" data-target="#blood-bank" class="collapsed">
                            <a href="#"><i class="fas fa-laptop-medical"></i> Blood Bank <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="blood-bank">
                            <li class="active"><a href="admin-bloodInput.php">Input Blood</a></li>
                            <li class="active"><a href="admin-bloodOutput.php">Output Blood</a></li>
                            <li><a href="admin-bloodDonor.php">Blood Donor</a></li>
                        </ul>

                        <li  data-toggle="collapse" data-target="#hospital-activities" class="collapsed">
                            <a href="#"><i class="fas fa-file-medical"></i> Hospital Activities <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="hospital-activities">
                            <li class="active"><a href="admin-birthrecord.php">Birth Record</a></li>
                            <li><a href="admin-deathrecord.php">Death Record</a></li>
                        </ul>

                        <li>
                            <a href="admin-sms.php"><i class="fas fa-sms"></i> SMS</a>
                        </li>

                        <li>
                            <a href="admin-email.php"><i class="fas fa-envelope-open-text"></i> Mail</a>
                        </li>

                        <li  data-toggle="collapse" data-target="#Settings" class="collapsed">
                            <a href="admin-setting.php"><i class="fas fa-cogs"></i> Settings<span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="Settings">
                            <li class="active"><a href="admin-setting.php">Admin Settings</a></li>
                            <li><a href="admin-settingLanguage.php">Language Settings</a></li>
                        </ul>

                        <li>
                            <a href="admin-noties.php"><i class="fas fa-notes-medical"></i> Notes Bord</a>
                        </li>

                        <li>
                            <a href="admin-profile.php"><i class="fas fa-address-card"></i> Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <!-- 			<?php

    // require_once 'assets/php/admin-topnavbar.php';

    ?> -->
