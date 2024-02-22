<div class="container-emp-list">
        <div class="employee-list">
                <div class="header-emp-list"><h3>Employee List</h3>
                <div class="search-emp-list">
                    <input type="text" id="search-bar" size="30" placeholder="Search..." oninput="applyFilter()">
                </div>
                    <table class="emp-masterlist" style="width: 100%;">
                        <thead>
                            <tr>
                                <th><button><i class="fa-solid fa-arrow-down-wide-short" ></i></button> QR</th>
                                <th><button><i class="fa-solid fa-arrow-down-wide-short" onclick="sortColumnByID()" ></i></button> ID</th>
                                <th><button><i class="fa-solid fa-arrow-down-wide-short" onclick="sortColumnByName()"></i></button> Name</th>
                                <th><button><i class="fa-solid fa-filter" onclick="sortColumnByRole()"></i></button> Role</th>
                                <th><button><i class="fa-solid fa-arrow-down-wide-short" onclick="sortColumnByDate()"></i></button> Date</th>
                                <th><button><i class="fa-solid fa-filter" onclick="sortColumnByStatus()"></i></button> Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="emp-masterlist-body" >
                            <tr>
                                <td>T570</td>
                                <td>0570</td>
                                <td>Amy Wulfhardt</td>
                                <td>Teacher</td>
                                <td>03/23/2024</td>
                                <td style="color: green">Active</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>T571</td>
                                <td>0571</td>
                                <td>Ryan Gosling</td>
                                <td>Teacher</td>
                                <td>02/21/2024</td>
                                <td style="color: red">Inactive</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>IT572</td>
                                <td>0572</td>
                                <td>Gawr Gura</td>
                                <td>IT</td>
                                <td>02/04/2024</td>
                                <td style="color: green">Active</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>A573</td>
                                <td>0573</td>
                                <td>Amelia Watson</td>
                                <td>Admin</td>
                                <td>02/03/2024</td>
                                <td style="color: red">Inactive</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>IT574</td>
                                <td>0574</td>
                                <td>Mori Calliope</td>
                                <td>IT</td>
                                <td>03/23/2024</td>
                                <td style="color: green">Active</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>T575</td>
                                <td>0575</td>
                                <td>Usada Pekora</td>
                                <td>Teacher</td>
                                <td>02/21/2024</td>
                                <td style="color: red">Inactive</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>T576</td>
                                <td>0576</td>
                                <td>Shirokami Fubuki</td>
                                <td>Teacher</td>
                                <td>02/04/2024</td>
                                <td style="color: green">Active</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>A577</td>
                                <td>0577</td>
                                <td>Rin Penrose</td>
                                <td>Admin</td>
                                <td>02/03/2024</td>
                                <td style="color: red">Inactive</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>IT578</td>
                                <td>0578</td>
                                <td>Gin Penrose</td>
                                <td>IT</td>
                                <td>03/23/2024</td>
                                <td style="color: green">Active</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>IT579</td>
                                <td>0579</td>
                                <td>Amano Pikamee</td>
                                <td>IT</td>
                                <td>02/21/2024</td>
                                <td style="color: red">Inactive</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>T580</td>
                                <td>0580</td>
                                <td>Uruha Rusia</td>
                                <td>Teacher</td>
                                <td>02/04/2024</td>
                                <td style="color: green">Active</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>T581</td>
                                <td>0581</td>
                                <td>Asa Coco</td>
                                <td>Teacher</td>
                                <td>02/03/2024</td>
                                <td style="color: red">Inactive</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>A582</td>
                                <td>0582</td>
                                <td>Tokino Sora</td>
                                <td>Admin</td>
                                <td>02/03/2024</td>
                                <td style="color: red">Inactive</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        <div class="eml-modal-mask hidden">
            <div class="eml-form-container">
                <div class="eml-details">
                    <div class="emp-icon">
                        <img src="../assets/testpic.png" alt="emp icon" class="emp-img">
                    </div>
                    <div class="emp-name">
                        Django Freeman<br><i>Teacher</i>
                    </div>
                    <div class="emp-status">
                        <button class="status-btn">
                            Status
                        </button>
                    </div>
                    <div class="emp-role">
                        <button class="role-btn">
                            Role
                        </button>
                    </div>
                </div>
                <div class="eml-selection">
                    <h2>Edit Status</h2>
                    <label for="select-status">Status</label>
                    <select id="select-status" class="selection">
                        <option value="Active">
                            Active
                        </option>
                        <option value="Inactive">
                            Inactive
                        </option>
                    </select>
                    <button class="btn-save">Save Status</button>
                </div>
                <div class="eml-modal-close">
                    <i class="far fa-times-circle" style="font-size:1.5rem;cursor:pointer;"></i>
                </div>
            </div>
        </div>

        <script>
            function applyFilter() {
    var searchValue = document.getElementById('search-bar').value.toLowerCase();
    var tableBody = document.getElementById('emp-masterlist-body');
    var rows = tableBody.getElementsByTagName('tr');

    for (var i = 0; i < rows.length; i++) {
        var searchCells = rows[i].getElementsByTagName('td');
        var found = false;

        for (var j = 0; j < searchCells.length; j++) {
            var cellContent = searchCells[j].textContent.toLowerCase();

            if (cellContent.includes(searchValue)) {
                found = true;
                break;
            }
        }

        if (found) {
            rows[i].style.display = '';
        } else {
            rows[i].style.display = 'none';
        }
    }
}

        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');
        let toggleModals = document.querySelectorAll('.action-btn');
        let showModal = document.querySelector('.eml-modal-mask');
        let closeModal = document.querySelector('.far');
        let select = document.querySelector('select');
        btn.onclick = function () {
            sidebar.classList.toggle('active');
        }
        for (let i=0; i<toggleModals.length; i++){
            toggleModals[i].onclick=()=>{ showModal.classList.remove('hidden') }
        }
        closeModal.onclick=()=>{
            showModal.classList.toggle('hidden');
        }

        let roleButton = document.querySelector('.role-btn');
        let emlSelection = document.querySelector('.eml-selection');

        roleButton.addEventListener('click', function() {
            emlSelection.innerHTML = `
                <h2>Edit Role</h2>
                <label for="select-role">Role</label>
                <select id="select-role" class="selection">
                    <option value="Teacher">Teacher</option>
                    <option value="IT">IT</option>
                    <option value="Admin">Admin</option>
                </select>
                <button class="btn-save">Save Role</button>
            `;})

        let statusButton = document.querySelector('.status-btn');
        statusButton.addEventListener('click', function() {
            emlSelection.innerHTML = `
                <h2>Edit Status</h2>
                <label for="select-status">Status</label>
                <select id="select-status" class="selection">
                    <option value="Active">
                        Active
                    </option>
                    <option value="Inactive">
                        Inactive
                    </option>
                </select>
                <button class="btn-save">Save Status</button>
            `;})
        
        let newCloseModal = document.querySelector('.far');
        newCloseModal.addEventListener('click', function() {
            showModal.classList.add('hidden');
        });
        
            let sortDirectionID = 1;
            let sortDirectionName = 1;
            let sortDirectionRole = 1;
            let sortDirectionDate = 1; 
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

            function sortColumnByRole() {
                const tbody = document.querySelector('tbody');
                const rows = Array.from(tbody.querySelectorAll('tr'));

                const sortedRows = rows.sort((a, b) => {
                    const aValue = a.children[3].innerText;
                    const bValue = b.children[3].innerText;
                    
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
                const aValue = new Date(a.children[4].innerText);
                const bValue = new Date(b.children[4].innerText);
                
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
            function sortColumnByStatus() {
            const tbody = document.querySelector('tbody');
            const rows = Array.from(tbody.querySelectorAll('tr'));

            const sortedRows = rows.sort((a, b) => {
                const aValue = a.children[5].innerText;
                const bValue = b.children[5].innerText;
                
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
        </script>