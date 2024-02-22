<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "/assets/Oikos Logo.png">
    <link rel="stylesheet" href = "/CSS/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Oikos Admin: Student Master List</title>
    <style>

      
        .add-student-btn {
            font-size: 1em;
            font: sans-serif;
            padding: 10px;
            background-color: #323468;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 1em;
            margin-bottom: 1em;
        }
        .add-grade-level-btn {
            font-size: 1em;
            font: sans-serif;
            padding: 10px;
            background-color: #323468;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 1em;
            margin-bottom: 1em;
        }
        .add-section-btn {
            font-size: 1em;
            font: sans-serif;
            padding: 10px;
            background-color: #323468;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 1em;
            margin-bottom: 1em;
        }
        .rem-btn {
            font-size: 1em;
            font: sans-serif;
            padding: 10px;
            background-color: #323468;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 1em;
            margin-bottom: 1em;
        }
        .far{
            transform:translateX(1em);
        }
        .modal-mask{
            position:absolute;
            top:0;
            left:0;
            height:100vh;
            width:100%;
            z-index:100;
            background-color:rgba(0, 0, 0, 0.534);
            opacity:1;
            transition:opacity 200ms ease-in-out;
            display:flex;
            align-items:center;
            justify-content: center;
        }
        .form-container{
            background-color:white;
            border-radius:5px;
            width:65%;
            display:flex;
            flex-direction:column;
            padding:2em;
        }
        .form-header{
            display:flex;
            justify-content:space-between;
            align-items:center;
        }
        #form-content {
            display:flex;
            flex-direction:column;
            margin-top:1em;
        }
        .form-group{
            display: flex;
            gap: 1rem;
            margin-top: 1em;
        }
        .form-group-select{
            display: flex;
            flex-direction: column;
        }
        .select-input{
            height:2em;
            font-size:1rem;
            border:1px solid #dedede;
            border-radius: 5px;
            width: 100%;
        }

        .btn-submit,.btn-cancel,.btn-import{
            margin-left:2em;
            width:28%;
        }
        .btn-submit{
            padding:1em;
            background-color:#13c36b;
            font-size:.8rem;
            font-weight:bold;
            color:white;
            border:none;
            border-radius: 15px;
            
            transition:opacity 150ms ease-in-out;
        }
        .btn-submit:hover{
            cursor: pointer;
            opacity:75%;
        }
        .btn-import{
            padding:1em;
            background-color:#2832c2;
            font-size:.8rem;
            font-weight:bold;
            color:white;
            border:none;
            border-radius: 15px;
            
            transition:opacity 150ms ease-in-out;
        }
        .btn-import:hover{
            cursor: pointer;
            opacity:75%;
        }
        .btn-cancel{
            padding:1em;
            background-color:#DE3A3B;
            font-size:.8rem;
            font-weight:bold;
            color:white;
            border:none;
            border-radius: 15px;
            
            transition:opacity 150ms ease-in-out;
        }
        .btn-cancel:hover{
            cursor: pointer;
            opacity:75%;
        }
        .submit-group{
            display: flex;
            justify-content: center;
            
        }
        .hidden{
            visibility:hidden;
            opacity:0;
        }
        .input-group{
            width:25%;
            display:flex;
            flex-direction:column;
        }
        .input-group-special{
            display: flex;
            flex-direction: column;
        }
        .input-group-special input,
        .input-group-special select {
            padding: 0.5rem;
            border-radius: 3px;
            border: 1px solid #ccc;
            font-size: 1rem;
            margin-bottom: .5rem;
            width: 100%;
        }
        .input-field{
            border:none; 
            height:2em;
            font-size:1rem;
            border: 1px solid #dedede;
        }

        .form-import {
        position: absolute;
        display: none;
        justify-content: center;
        align-items: center;
        height: 70vh;
        width: 70vh;
        background-color: #F2F3F5;
        margin: auto;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        }       
        .close{
            border-radius:100%;
            width:1.2rem;
            height:1.2rem;
        }
        .import-area{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 67vh;
        width: 67vh;
        background-color: white;
        margin:2.5%;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        border:1px solid black;
        }
        .import-area h1{
            opacity:0.2;
            letter-spacing: 0.5em
        }
        .input-row {
            display: flex;
            width: 100%;
        }

        .input-column {
            flex: 1;
            margin-right: 1rem;
        }


        .form-container-add {
            text-align: center;
            background-color:white;
            border-radius:5px;
            width:30%;
            padding:2em;
        }

        .form-group-add {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 4%;
        }
        .button-container {
            display: flex;
            justify-content: center;
        }

        .button-container button {
            margin: 0 5px;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button-container #confirm-add-grade-btn {
            background-color: #4CAF50;
            color: white;
        }

        .button-container #confirm-add-section-btn {
            background-color: #4CAF50;
            color: white;
        }
        .button-container #confirm-remove-btn {
            background-color: #5f0a0a;
            color: white;
        }

        .button-container .cancel {
            background-color: #ccc;
        }

    </style>
</head>
<body>
    @include('component.admin.sidenav')
    <div class="main-content">
        <h1>Student Master List</h1>
        <button class="add-student-btn" onclick="showStudentModal()">+ Add a Student</button>
        <button class="add-grade-level-btn" onclick="showAddGradeModal()">+ Add a Grade Level</button>
        <button class="add-section-btn" onclick="showAddSectionModal()">+ Add a Section</button>        
        <button class="rem-btn" onclick="showRemoveModal()">- Remove Grade Level/Section</button>
            <div class="std-log-container">
                <div class="header-std-list"><h2>Student List</h2>
                    <div class="std-filter-container">
                        <div class="search-table-container">
                            <div class="std-search-container">
                                <input type="text" id="search" size="30" placeholder="Search..." oninput="applyFilter()">
                            </div>
                        </div>
                    </div>
                <table class="std-attendance-type" style="width: 100%;">    
                    <thead>
                        <tr>
                            <th>QR</th>
                            <th>
                                <button class="sort-button" onclick="sortColumnByID()">
                                    <i class="fa-solid fa-arrow-down-wide-short"></i>
                                </button>
                                ID
                            </th>
                            <th>
                                <button class="sort-button" onclick="sortColumnByName()">
                                    <i class="fa-solid fa-arrow-down-wide-short" id="sort-icon-name"></i>
                                </button>
                                Name
                            </th>
                            <th>
                                <button class="sort-button" onclick="sortColumnByDate()">
                                    <i class="fa-solid fa-arrow-down-wide-short"></i>
                                </button>
                                Date
                            </th>
                            <th>
                                <button class="sort-button" onclick="sortColumnByLevel()">
                                    <i class="fa-solid fa-filter"></i>
                                </button>
                                Level
                            </th>
                            <th>
                                <button class="sort-button" onclick="sortColumnBySection()">
                                    <i class="fa-solid fa-arrow-down-wide-short"></i>
                                </button>
                                Section
                            </th>
                            <th>
                                <button class="sort-button" onclick="sortColumnByStatus()">
                                <i class="fa-solid fa-filter"></i>
                            </button>
                            Status
                            </th>
                            <th>
                                Action
                            </th> 
                        </tr>
                    </thead>
                    <tbody id="logTableBody">
                        @forEach ($Students as $Student) 
                            <tr>
                                <td>QR</td>
                                <td>{{$Student->id}}</td>
                                <td>{{$Student->fname ." ".$Student->mname ." ".$Student->lname}}</td>
                                <td>{{$Student->bday}}</td>
                                <td>{{$Student->level}}</td>
                                <td>{{$Student->section}}</td>
                                <td>{{$Student->enroll_status}}</td>
                                <td><button class="action-btn" id="stud-action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                        @endforEach
                    </tbody>
                </table>
            </div>
            <div class="container"></div>
    </div>
    <div id="remove-modal" class="modal-mask hidden">
        <div class="form-container-add">
            <div class="form-header">
                <i id="close-remove-modal" class="far fa-times-circle" onclick ="hideRemoveModal()" style="font-size: 1.3rem; cursor: pointer;"></i>
            </div>
            <div class="form-group-add">
                <div class="input-group-add">
                    <label for="remove-dropdown">Select Grade Level/Section to Remove</label>
                    <select id="remove-dropdown" class="select-input">
                    </select>
                </div>
            </div>
            <div class="button-container">
                <button id="confirm-remove-btn" onclick ="removeSelectedGradeLevelOrSection()">Remove</button>
                <button id="cancel-remove-btn" onclick ="hideRemoveModal()">Cancel</button>
            </div>
        </div>
    </div>
    <div id="add-grade-modal" class="modal-mask hidden">
        <div class="form-container-add">
            <form id="form-content-add">
                <div class="form-group-add">
                    <div class="input-group-add">
                        <label for="new-grade-level">Enter the new Grade Level:</label>
                        <input type="text" id="new-grade-level" class="input-field" required>
                    </div>
                </div>
                <div class="button-container">
                    <button onclick="confirmAddGradeLevel()" id="confirm-add-grade-btn">Add Grade Level</button>
                    <button class="cancel" onclick="hideAddGradeModal()" id="cancel-add-grade-btn">Cancel</button>
                </div>
            </form>
        </div>
    </div>    
    <div id="add-section-modal" class="modal-mask hidden">
        <div class="form-container-add">
            <form id="form-content-add">
                <div class="form-group-add">
                    <div class="input-group-add">
                        <label for="new-section">Enter the new Section:</label>
                        <input type="text" id="new-section" class="input-field" required>
                    </div>
                </div>
                <div class="button-container">
                    <button onclick="confirmAddSection()" id="confirm-add-section-btn">Add Section</button>
                    <button class="cancel" onclick="hideAddSectionModal()" id="cancel-add-section-btn">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div id="student-modal" class="modal-mask hidden">
        <div class="form-container">
            <div class="form-header"><h2>Ad Student</h2><di class="far fa-times-circle" style="font-size:1.3rem;cursor:pointer;"></i></div>
            <form id="form-content">
                <div class="input-row">
                    <div class="input-column">
                        <div class="input-group-special">
                                <label for="first-name">First Name</label>
                                <input type="text" class='input-field' id='first-name' required>
                        </div>
                        <div class="input-group-special">
                                <label for="middle-name">Middle Name</label>
                                <input type="text" class='input-field' id='middle-name' required>
                        </div>
                        <div class="input-group-special">
                                <label for="last-name">Last Name</label>
                                <input type="text" class='input-field' id='last-name' required>
                        </div>
                        <div class="input-group-special">
                                <label for="extension">Suffix</label>
                                <input type="text" class='input-field' id='extension'>
                        </div>
                        <div class="input-group-special">
                            <label for="sex">Sex</label>
                            <select id="sex" class="select-input" required>
                                <option value="null">---</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                        <div class="input-group-special">
                            <label for="telephone-number">Telephone Number</label>
                            <input type="text" class='input-field' id='telephone-number' required>
                        </div>
                        <div class="input-group-special">
                            <label for="mobile-number">Mobile Number</label>
                            <input type="text" class='input-field' id='mobile-number' required>
                        </div>
                        <div class="input-group-special">
                            <label for="nationality">Nationality</label>
                            <input type="text" class='input-field' id='nationality' required>
                        </div>
                        <div class="input-group-special">
                                <label for="birthday">Birthdate</label>
                                <input type="date" id='birthday' required>
                        </div>
                    
                </div>
                    <div class="input-column">
                        <div class="input-group-special">
                            <label for="fetcher">Fetcher</label>
                            <input type="text" class='input-field' id='fetch' required>
                        </div>
                            <div class="input-group-special">
                                <label for="address">Address</label>
                                <input type="text" class='input-field' id='address' required>
                            </div>
                            <div class="input-group-special">
                                <label for="city">City</label>
                                <input type="text" class='input-field' id='city' required>
                            </div>
                            <div class="input-group-special">
                                <label for="region">Region</label>
                                <input type="text" class='input-field' id='region' required>
                            </div>
                            <div class="input-group-special">
                                <label for="postal-code">Postal Code</label>
                                <input type="text" class='input-field' id='postal-code' required>
                            </div>
                            <div class="input-group-special">
                                <label for="country">Country</label>
                                <input type="text" class='input-field' id='country' required>
                            </div>
                            <div class="input-group-special">
                                <label for="enroll-status">Enrollment Status</label>
                                <select id="enroll-status" class="select_input" required>
                                    <option value="null">---</option>
                                    <option value="Enrolled">Enrolled</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>
                            <div class="input-group-special">
                                <label for="grade-level">Grade Level</label>
                                <select id="grade-level" class="select-input" required>
                                    <option value="null">---</option>
                                    <option value="1">Grade 1</option>
                                    <option value="2">Grade 2</option>
                                    <option value="3">Grade 3</option>
                                    <option value="4">Grade 4</option>
                                    <option value="5">Grade 5</option>
                                    <option value="6">Grade 6</option>
                                    <option value="7">Grade 7</option>
                                    <option value="8">Grade 8</option>
                                    <option value="9">Grade 9</option>
                                    <option value="10">Grade 10</option>
                                    <option value="11">Grade 11</option>
                                    <option value="12">Grade 12</option>
                                </select>
                            </div>
                            <div class="input-group-special">
                                <label for="section" >Section</label>
                                <select id="section" class="select-input" required>
                                    <option value="null">---</option>
                                    <option class = "_1" value="Luke" hidden>Luke</option>
                                    <option class = "_1" value="Tyrone" hidden>Tyrone</option>
                                    <option class = "_1" value="Adrian" hidden>Adrian</option>
                                    <option class = "_1" value="Fuack" hidden>Fuack</option>
                                    <option class = "_2" value="Eyo" hidden>Eyo</option>
                                    <option class = "_2" value="Leggo" hidden>Leggo</option>
                                    <option class = "_2" value="Bruh" hidden>Bruh</option>
                                    <option class = "_2" value="Cap" hidden>Cap</option>
                                    <option class = "_3" value="Placeholder" hidden>Placeholder</option>
                                    <option class = "_3" value="Masipag" hidden>Masipag</option>
                                    <option class = "_3" value="Matatag" hidden>Matatag</option>
                                    <option class = "_3" value="Blood" hidden>Blood</option>
                                </select>
                            </div>
                        </div>
                    </div>
                <br><br>
                <div class="submit-group">
                    <button onclick = "addStudent(event)" class="btn-submit">Add</button>
                    <button class="btn-cancel" onclick ="hideStudentModal()">Cancel</button>
                    <button class="btn-import" onclick="excelOpen(event)">Import</button>
                    <!--FInished
                    fname
                    lname
                    minitial
                    extension
                    Level
                    Section
                    Fetcher
                    Enroll status
                    bday
                    address
                    city
                    region
                    postal code
                    country
                    nationality
                    sex
                    telephone number
                    mobile number
                    TODO
                    
                    not included
                    student id
                    email
                    password
                    
                -->
                </div>

                
                
            </form>
            <div class="form-import" id="import">
                <button class="close" onclick="excelclose(event)" style="float:right;"><i class="fa-solid fa-xmark"></i></button>
                <div class="import-area">

                    <h1>IMPORT EXCEL</h1>

                </div>
                </div>
        </div>
    </div>

    {{-- ACTION BUTTON MODAL --}}
    <div class="eml-modal-mask hidden">
        <div class="eml-form-container">
            <div class="eml-details">
                <div class="emp-icon">
                    <img src="../assets/testpic.png" alt="student icon" class="emp-img">
                </div>
                <div class="emp-name">
                    Abdul Fahroud<br><i>Student</i>
                </div>
            </div>
            <div class="eml-selection">
                <h2>Edit Status</h2>
                <label for="select-status">Status</label>
                <select id="select-status" class="selection">
                    <option value="Enrolled">
                        Enrolled
                    </option>
                    <option value="Not Enrolled">
                        Not Enrolled
                    </option>
                </select>
                <button class="btn-save">Save Status</button>
            </div>
            <div class="eml-modal-close">
                <i class="far fa-times-circle" id="action-modal-close" style="font-size:1.5rem;cursor:pointer;"></i>
            </div>
        </div>
    </div>

    <script>
    // SCRIPT FOR ACTION BUTTON MODAL
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');
        let toggleActionModals = document.querySelectorAll('.action-btn');
        let showActionModal = document.querySelector('.eml-modal-mask');
        let closeActionModal = document.querySelector('#action-modal-close');
        btn.onclick = function () {
            sidebar.classList.toggle('active');
        }
        for (let i=0; i<toggleActionModals.length; i++){
            toggleActionModals[i].onclick=()=>{ showActionModal.classList.remove('hidden') }
        }
        closeActionModal.onclick=()=>{
            showActionModal.classList.toggle('hidden');
        }
    </script>

    <script>
            document.addEventListener('DOMContentLoaded', function () {
                var tableBody = document.getElementById('logTableBody');
                var rows = tableBody.getElementsByTagName('tr');
                for (var i = 0; i < rows.length; i++) {
                    var statusCell = rows[i].querySelector('td:nth-child(7)');
                    if (statusCell.textContent.toLowerCase() === 'pending') {
                        statusCell.style.color = 'Orange';
                    } else if (statusCell.textContent.toLowerCase() === 'enrolled') {
                        statusCell.style.color = 'green';
                    } else {
                        statusCell.style.color = '';
                    }
                }
                const searchIcon = document.getElementById('search-icon');

            //searchIcon.addEventListener('click', function () {
                //applyFilter(); 
           // }); 
            });
            function applyFilter() {
                var searchValue = document.getElementById('search').value.toLowerCase();
                var tableBody = document.getElementById('logTableBody');
                var rows = tableBody.getElementsByTagName('tr');
        
                for (var i = 0; i < rows.length; i++) {
                    var searchCell = rows[i].textContent.toLowerCase();
        
                    if (searchValue === '' || searchCell.includes(searchValue)) {
                        rows[i].style.display = '';
                    } else {
                        rows[i].style.display = 'none';
                    }
                }
            }
            let sortDirectionID = 1;
            let sortDirectionName = 1;
             
            let sortDirectionDate = 1;
            let sortDirectionLevel = 1; 
            let sortDirectionSection = 1; 
            let sortDirectionStatus = 1; 
            function sortColumnByID() {
                const tbody = document.querySelector('tbody');
                const rows = Array.from(tbody.querySelectorAll('tr'));

                const sortedRows = rows.sort((a, b) => {
                    const aValue = parseInt(a.children[1].innerText); // Convert text to integer for numeric comparison
                    const bValue = parseInt(b.children[1].innerText);
                    
                    return sortDirectionID * (aValue - bValue); // Compare numeric values
                });

                while (tbody.firstChild) {
                    tbody.removeChild(tbody.firstChild);
                }

                sortedRows.forEach(row => tbody.appendChild(row));

                sortDirectionID *= -1; // Update the sorting direction

                const sortIcon = document.querySelector('.sort-button i:nth-child(2)'); // Update the icon selector
                sortIcon.classList.remove('fa-sort-up', 'fa-sort-down');
                if (sortDirectionID === 1) {
                    sortIcon.classList.add('fa-sort-up');
                } else {
                    sortIcon.classList.add('fa-sort-down');
                }
            }

            function sortColumnByName() {
                const tbody = document.querySelector('tbody');
                const rows = Array.from(tbody.querySelectorAll('tr'));

                const sortedRows = rows.sort((a, b) => {
                    const aValue = a.children[2].innerText;
                    const bValue = b.children[2].innerText;
                    
                    return sortDirectionName * aValue.localeCompare(bValue, undefined, {numeric: true});
                });

                while (tbody.firstChild) {
                    tbody.removeChild(tbody.firstChild);
                }

                sortedRows.forEach(row => tbody.appendChild(row));

                sortDirectionName *= -1; // Update the sorting direction
                const sortIcon = document.getElementById('sort-icon-name');
                if (sortDirectionName === 1) {
                    sortIcon.classList.remove('fa-sort-alpha-down');
                    sortIcon.classList.add('fa-sort-alpha-up');
                } else {
                    sortIcon.classList.remove('fa-sort-alpha-up');
                    sortIcon.classList.add('fa-sort-alpha-down');
                }

            }
            function sortColumnByDate() {
            const tbody = document.querySelector('tbody');
            const rows = Array.from(tbody.querySelectorAll('tr'));

            const sortedRows = rows.sort((a, b) => {
                const aValue = new Date(a.children[3].innerText);
                const bValue = new Date(b.children[3].innerText);
                
                return sortDirectionDate * (aValue - bValue);
            });

            while (tbody.firstChild) {
                tbody.removeChild(tbody.firstChild);
            }

            sortedRows.forEach(row => tbody.appendChild(row));

            sortDirectionDate *= -1;

            const sortIcon = document.querySelector('.sort-button i:nth-child(3)');
            sortIcon.classList.remove('fa-sort-up', 'fa-sort-down');
            if (sortDirectionDate === 1) {
                sortIcon.classList.add('fa-sort-up');
            } else {
                sortIcon.classList.add('fa-sort-down');
            }
        }
            function sortColumnByLevel() {
                const tbody = document.querySelector('tbody');
                const rows = Array.from(tbody.querySelectorAll('tr'));

                const sortedRows = rows.sort((a, b) => {
                    const aValue = extractNumericValue(a.children[4].innerText);
                    const bValue = extractNumericValue(b.children[4].innerText);
                    
                    return sortDirectionLevel * (aValue - bValue);
                });

                while (tbody.firstChild) {
                    tbody.removeChild(tbody.firstChild);
                }

                sortedRows.forEach(row => tbody.appendChild(row));

                sortDirectionLevel *= -1;

                const sortIcon = document.querySelectorAll('.sort-button i:nth-child(3)');
                sortIcon.forEach(icon => {
                    icon.classList.remove('fa-sort-up', 'fa-sort-down');
                    if (sortDirectionLevel === 1) {
                        icon.classList.add('fa-sort-up');
                    } else {
                        icon.classList.add('fa-sort-down');
                    }
                });
            }

            function sortColumnBySection() {
                const tbody = document.querySelector('tbody');
                const rows = Array.from(tbody.querySelectorAll('tr'));

                const sortedRows = rows.sort((a, b) => {
                    const aValue = a.children[5].innerText;
                    const bValue = b.children[5].innerText;
                    
                    return sortDirectionSection * aValue.localeCompare(bValue, undefined, {numeric: true});
                });

                while (tbody.firstChild) {
                    tbody.removeChild(tbody.firstChild);
                }

                sortedRows.forEach(row => tbody.appendChild(row));

                sortDirectionSection *= -1;

                const sortIcon = document.querySelectorAll('.sort-button i:nth-child(4)');
                sortIcon.forEach(icon => {
                    icon.classList.remove('fa-sort-up', 'fa-sort-down');
                    if (sortDirectionSection === 1) {
                        icon.classList.add('fa-sort-up');
                    } else {
                        icon.classList.add('fa-sort-down');
                    }
                });
            }
            function sortColumnByStatus() {
            const tbody = document.querySelector('tbody');
            const rows = Array.from(tbody.querySelectorAll('tr'));

            const sortedRows = rows.sort((a, b) => {
                const aValue = a.children[6].innerText;
                const bValue = b.children[6].innerText;
                
                return sortDirectionStatus * aValue.localeCompare(bValue);
            });

            while (tbody.firstChild) {
                tbody.removeChild(tbody.firstChild);
            }

            sortedRows.forEach(row => tbody.appendChild(row));

            sortDirectionStatus *= -1;

            const sortIcon = document.querySelector('.sort-button i:nth-child(7)');
            sortIcon.classList.remove('fa-sort-up', 'fa-sort-down');
            if (sortDirectionStatus === 1) {
                sortIcon.classList.add('fa-sort-up');
            } else {
                sortIcon.classList.add('fa-sort-down');
            }
        }
            function extractNumericValue(level) {
                const matches = level.match(/\d+/);
                return matches ? parseInt(matches[0]) : 0;
        }
        let toggleModal=document.querySelector('.add-student-btn');
        let showModal=document.querySelector('.modal-mask');
        let closeModal=document.querySelector('.far');
        let textArea=document.querySelector('textarea');
        let select=document.querySelector('select');
        let gradeElement=document.getElementById('grade-level');

        function showStudentModal() {
            document.getElementById('student-modal').classList.remove('hidden');
        }
        function hideStudentModal() {
            document.getElementById('student-modal').classList.add('hidden');
        }



        gradeElement.addEventListener('change', ()=>{
            let sectionSelector = '._' + gradeElement.value;
            let previousSelected = document.querySelectorAll('.show');
            let sections = document.querySelectorAll(sectionSelector);
            if (!previousSelected) {
                return;
            }
            else{
                previousSelected.forEach(prev => {
                    prev.hidden = true;
                    prev.classList.remove('show');
                });
            }
            sections.forEach(section=>{
                section.hidden = false;
                section.classList.toggle('show');
            });
        });

        function excelOpen(event){
            event.preventDefault();
            document.getElementById("import") .style.display ="block";
        }
        function excelclose(event){
            event.preventDefault();
            document.getElementById("import") .style.display ="none";
        }


        gradeElement.addEventListener('change', ()=>{
            let sectionSelector = '._' + gradeElement.value;
            let previousSelected = document.querySelectorAll('.show');
            let sections = document.querySelectorAll(sectionSelector);
            if (!previousSelected) {
                return;
            }
            else{
                previousSelected.forEach(prev => {
                    prev.hidden = true;
                    prev.classList.remove('show');
                });
            }
            sections.forEach(section=>{
                section.hidden = false;
                section.classList.toggle('show');
            });
        });

        function excelOpen(event){
            event.preventDefault();
            document.getElementById("import") .style.display ="block";
        }
        function excelclose(event){
            event.preventDefault();
            document.getElementById("import") .style.display ="none";
        }



        document.addEventListener('DOMContentLoaded', function () {
            loadFromLocalStorage('gradeLevels', 'grade-level');
            loadFromLocalStorage('sections', 'section');
        });

        function loadFromLocalStorage(storageKey, dropdownId) {
            const dropdown = document.getElementById(dropdownId);
            const storedItems = JSON.parse(localStorage.getItem(storageKey)) || [];


            storedItems.forEach(item => {
                const option = document.createElement('option');
                option.value = item.toLowerCase();
                option.textContent = item;
                dropdown.appendChild(option);
            });
        }

        function saveToLocalStorage(storageKey, newItem) {
            const existingItems = JSON.parse(localStorage.getItem(storageKey)) || [];
            existingItems.push(newItem);
            localStorage.setItem(storageKey, JSON.stringify(existingItems));
        }

        function addGradeLevel() {
            showAddGradeModal();
        }

        function confirmAddGradeLevel() {
            const newGradeLevelInput = document.getElementById('new-grade-level');
            const newGradeLevel = newGradeLevelInput.value.trim();

            if (newGradeLevel) {
                const gradeLevelDropdown = document.getElementById('grade-level');
                const newGradeLevelOption = document.createElement('option');
                newGradeLevelOption.value = newGradeLevel;
                newGradeLevelOption.textContent = `Grade ${newGradeLevel}`;

                gradeLevelDropdown.appendChild(newGradeLevelOption);
                saveToLocalStorage('gradeLevels', newGradeLevel);
                hideAddGradeModal();

                newGradeLevelInput.value = '';
            }
        }

        function addSection() {
            showAddSectionModal();
        }

        function confirmAddSection() {
            const newSectionInput = document.getElementById('new-section');
            const newSection = newSectionInput.value.trim();

            if (newSection) {
                const sectionDropdown = document.getElementById('section');
                const newSectionOption = document.createElement('option');
                newSectionOption.value = newSection.toLowerCase();
                newSectionOption.textContent = newSection;

                sectionDropdown.appendChild(newSectionOption);
                saveToLocalStorage('sections', newSection);
                hideAddSectionModal();
                newSectionInput.value = '';
            }
        }

        document.getElementById('form-content-grade').addEventListener('submit', function(event) {
            event.preventDefault();
        });

        document.getElementById('form-content-section').addEventListener('submit', function(event) {
            event.preventDefault();
        });


        function showRemoveModal() {
            populateRemoveDropdown();
            document.getElementById('remove-modal').classList.remove('hidden');
        }

        function hideRemoveModal() {
            document.getElementById('remove-modal').classList.add('hidden');
        }

        function removeSelectedGradeLevelOrSection() {
            const removeDropdown = document.getElementById('remove-dropdown');
            const selectedItem = removeDropdown.value;

            if (selectedItem && selectedItem !== "null") {
                removeDropdown.remove(removeDropdown.selectedIndex);
                removeFromLocalStorage('gradeLevels', selectedItem);
                removeFromLocalStorage('sections', selectedItem);
                hideRemoveModal();
                location.reload();
            }
        }

        function removeFromLocalStorage(storageKey, itemToRemove) {
            const storedItems = JSON.parse(localStorage.getItem(storageKey)) || [];
            const updatedItems = storedItems.filter(item => item.toLowerCase() !== itemToRemove.toLowerCase());
            localStorage.setItem(storageKey, JSON.stringify(updatedItems));
        }

        document.getElementById('confirm-remove-btn').addEventListener('click', removeSelectedGradeLevelOrSection);
        document.getElementById('cancel-remove-btn').addEventListener('click', hideRemoveModal);

        function populateRemoveDropdown() {
            const gradeLevelDropdown = document.getElementById('grade-level');
            const sectionDropdown = document.getElementById('section');
            const removeDropdown = document.getElementById('remove-dropdown');

            removeDropdown.innerHTML = '<option value="null">---</option>';
            populateDropdownOptions(gradeLevelDropdown, removeDropdown, 'Grade');
            populateDropdownOptions(sectionDropdown, removeDropdown, '');

        function populateDropdownOptions(sourceDropdown, removeDropdown, labelPrefix) {
            for (let i = 0; i < sourceDropdown.options.length; i++) {
                   const option = sourceDropdown.options[i];
                    if (option.value !== "null" && !option.classList.contains('exclude-from-delete')) {
                        const newOption = document.createElement('option');
                        newOption.value = option.value;
                        newOption.textContent = labelPrefix + (option.value || '');
                        removeDropdown.appendChild(newOption);
                    }
                }
            }
        }
        populateRemoveDropdown();

        function showRemoveModal() {
            populateRemoveDropdown();
            document.getElementById('remove-modal').classList.remove('hidden');
        }

        function hideRemoveModal() {
            document.getElementById('remove-modal').classList.add('hidden');
        }


        function showAddGradeModal() {
            document.getElementById('add-grade-modal').classList.remove('hidden');
        }

        function hideAddGradeModal() {
            document.getElementById('add-grade-modal').classList.add('hidden');
        }

        function showAddSectionModal() {
            document.getElementById('add-section-modal').classList.remove('hidden');
        }

        function hideAddSectionModal() {
            document.getElementById('add-section-modal').classList.add('hidden');
        }
    </script>

    <script src = "/JS/addStudent.js"></script>
    <script src="/JS/navevent.js"></script>
</body>
</html>