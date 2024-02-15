<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        .btn-submit{
            padding:1em;
            background-color:#13c36b;
            font-size:.8rem;
            font-weight:bold;
            color:white;
            border:none;
            border-radius: 15px;
            width: 30%;
            transition:opacity 150ms ease-in-out;
        }
        .btn-submit:hover{
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
            width: 30%;
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
        textarea{
            resize:none;
            font-family:sans-serif;
            font-size:1rem;
            padding:.5rem;
            border:1px solid #dedede;
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
            width:50%;
            display:flex;
            flex-direction:column;
        }
        .input-field{
            border:none; 
            height:2em;
            font-size:1rem;
            border: 1px solid #dedede;
        }
    </style>
</head>
<body>
    @include('component.admin.sidenav')
    <div class="main-content">
        <h1>Student Master List</h1>
        <button class="add-student-btn">+ Add a Student</button>
            <div class="std-log-container">
                <div class="header-std-list"><h2>Student List</h2>
                    <div class="std-filter-container">
                        <div class="search-table-container">
                            <div class="std-search-container">
                                <input type="text" id="search" size="30" placeholder="Search...">
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
                        <tr>
                            <td>C137</td>
                            <td>202010421</td>
                            <td>Rick Sanchez</td>
                            <td>03/23/2020</td>
                            <td>Grade 3</td>
                            <td>Neitzche</td>
                            <td>Pending</td>
                            <td><i class="fa-solid fa-pencil"></i></td>
                        </tr>
                        <tr>
                            <td>PR1ME</td>
                            <td>202010422</td>
                            <td>Morty Smith</td>
                            <td>02/21/2020</td>
                            <td>Grade 10</td>
                            <td>Plato</td>
                            <td>Enrolled</td>
                            <td><i class="fa-solid fa-pencil"></i></td>
                        </tr>
                        <tr>
                            <td>C021</td>
                            <td>201910239</td>
                            <td>Gawr Gura</td>
                            <td>02/04/2019</td>
                            <td>Grade 4</td>
                            <td>Aristotle</td>
                            <td>Enrolled</td>
                            <td><i class="fa-solid fa-pencil"></i></td>
                        </tr>
                        <tr>
                            <td>C022</td>
                            <td>202012730</td>
                            <td>Amelia Watson</td>
                            <td>02/03/2020</td>
                            <td>Grade 5</td>
                            <td>Paloma</td>
                            <td>Pending</td>
                            <td><i class="fa-solid fa-pencil"></i></td>
                        </tr>
                        <tr>
                            <td>C023</td>
                            <td>202081297</td>
                            <td>Mori Calliope</td>
                            <td>03/23/2020</td>
                            <td>Grade 1</td>
                            <td>Democritus</td>
                            <td>Pending</td>
                            <td><i class="fa-solid fa-pencil"></i></td>
                        </tr>
                        <tr>
                            <td>C024</td>
                            <td>202017612</td>
                            <td>Usada Pekora</td>
                            <td>02/21/2020</td>
                            <td>Grade 2</td>
                            <td>Leonidas</td>
                            <td>Enrolled</td>
                            <td><i class="fa-solid fa-pencil"></i></td>
                        </tr>
                        <tr>
                            <td>C025</td>
                            <td>202065748</td>
                            <td>Shirokami Fubuki</td>
                            <td>02/24/2018</td>
                            <td>Grade 3</td>
                            <td>Xeres</td>
                            <td>Enrolled</td>
                            <td><i class="fa-solid fa-pencil"></i></td>
                        </tr>
                        <tr>
                            <td>C026</td>
                            <td>202010234</td>
                            <td>Rin Penrose</td>
                            <td>02/03/2020</td>
                            <td>Grade 4</td>
                            <td>Athena</td>
                            <td>Pending</td>
                            <td><i class="fa-solid fa-pencil"></i></td>
                        </tr>
                        <tr>
                            <td>C027</td>
                            <td>202012903</td>
                            <td>Gin Penrose</td>
                            <td>02/23/2020</td>
                            <td>Grade 7</td>
                            <td>Atreus</td>
                            <td>Pending</td>
                            <td><i class="fa-solid fa-pencil"></i></td>
                        </tr>
                        <tr>
                            <td>C028</td>
                            <td>202010164</td>
                            <td>Amano Pikamee</td>
                            <td>02/21/2020</td>
                            <td>Grade 5</td>
                            <td>Maximus</td>
                            <td>Enrolled</td>
                            <td><i class="fa-solid fa-pencil"></i></td>
                        </tr>
                        <tr>
                            <td>C029</td>
                            <td>202012394</td>
                            <td>Uruha Rushia</td>
                            <td>02/03/2020</td>
                            <td>Grade 6</td>
                            <td>Decimus</td>
                            <td>Enrolled</td>
                            <td><i class="fa-solid fa-pencil"></i></td>
                        </tr>
                        <tr>
                            <td>C030</td>
                            <td>202048625</td>
                            <td>Asa Coco</td>
                            <td>02/03/2020</td>
                            <td>Grade 11</td>
                            <td>Meridus</td>
                            <td>Pending</td>
                            <td><i class="fa-solid fa-pencil"></i></td>
                        </tr>
                        <tr>
                            <td>C031</td>
                            <td>202008520</td>
                            <td>Tokino Sora</td>
                            <td>02/03/2020</td>
                            <td>Grade 10</td>
                            <td>Gradius</td>
                            <td>Enrolled</td>
                            <td><i class="fa-solid fa-pencil"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container"></div>
    </div>
    <div class="modal-mask hidden">
        <div class="form-container">
            <div class="form-header">
                <h2>Add Student</h2>
                <i class="far fa-times-circle" style="font-size:1.3rem;cursor:pointer;"></i>
            </div>
            <form id="form-content">
                <div class="form-group">
                    <div class="input-group">
                        <label for="student-number">Student Number</label>
                        <input type="text" class='input-field' id='student-number'>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group-special">
                        <label for="first-name">First Name</label>
                        <input type="text" class='input-field' id='first-name'>
                    </div>
                    <div class="input-group-special">
                        <label for="middle-name">Middle Name</label>
                        <input type="text" class='input-field' id='middle-name'>
                    </div>
                    <div class="input-group-special">
                        <label for="last-name">Last Name</label>
                        <input type="text" class='input-field' id='last-name'>
                    </div>
                    <div class="input-group-special">
                        <label for="extension">Extension</label>
                        <input type="text" class='input-field' id='extension'>
                    </div>
                </div>
                <div class="form-group-select">
                        <label for="grade-level" style="margin-top: 1em;">Grade Level</label>
                        <select id="grade-level" class="select-input">
                        <option value="null">
                            ---
                        </option>
                        <option value="1">
                            Grade 1
                        </option>
                        <option value="2">
                            Grade 2
                        </option>
                        <option value="3">
                            Grade 3
                        </option>
                        <option value="4">
                            Grade 4
                        </option>
                        <option value="5">
                            Grade 5
                        </option>
                        <option value="6">
                            Grade 6
                        </option>
                        <option value="7">
                            Grade 7
                        </option>
                        <option value="8">
                            Grade 8
                        </option>
                        <option value="9">
                            Grade 9
                        </option>
                        <option value="10">
                            Grade 10
                        </option>
                        <option value="11">
                            Grade 11
                        </option>
                        <option value="12">
                            Grade 12
                        </option>
                    </select>
                    <label for="section" style="margin-top: 1em;">Section</label>
                    <select id="section" class="select-input">
                        <option value="null">
                            ---
                        </option>
                        <option class = "_1" value="Luke" hidden>
                            Luke
                        </option>
                        <option class = "_1" value="Tyrone" hidden>
                            Tyrone
                        </option>
                        <option class = "_1" value="Adrian" hidden>
                            Adrian
                        </option>
                        <option class = "_1" value="Fuack" hidden>
                            Fuack
                        </option>
                        <option class = "_2" value="Eyo" hidden>
                            Eyo
                        </option>
                        <option class = "_2" value="Leggo" hidden>
                            Leggo
                        </option>
                        <option class = "_2" value="Bruh" hidden>
                            Bruh
                        </option>
                        <option class = "_2" value="Cap" hidden>
                            Cap
                        </option>
                        <option class = "_3" value="Placeholder" hidden>
                            Placeholder
                        </option>
                        <option class = "_3" value="Masipag" hidden>
                            Masipag
                        </option>
                        <option class = "_3" value="Matatag" hidden>
                            Matatag
                        </option>
                        <option class = "_3" value="Blood" hidden>
                            Blood
                        </option>
                    </select>
                </div>
                <br><br>
                <div class="submit-group">
                    <button class="btn-submit">Add</button>
                    <button class="btn-cancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>
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

            searchIcon.addEventListener('click', function () {
                applyFilter(); 
            }); 
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
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');
        let toggleModal=document.querySelector('.add-student-btn');
        let showModal=document.querySelector('.modal-mask');
        let closeModal=document.querySelector('.far');
        let textArea=document.querySelector('textarea');
        let select=document.querySelector('select');
        let gradeElement=document.getElementById('grade-level');
        btn.onclick = function () {
            sidebar.classList.toggle('active');
        }
        toggleModal.onclick=()=>{
            showModal.classList.remove('hidden');
            select.value = "null";
        }
        closeModal.onclick=()=>{
            showModal.classList.toggle('hidden');
            select.value="null";
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
    </script>
</body>
</html>