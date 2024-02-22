<div class="container-emp-list">
        <div class="employee-list">
                <div class="header-emp-list"><h3>Employee List</h3>
                <div class="search-emp-list">
                    <input type="text" id="search-bar" size="30" placeholder="Search..." oninput="applyFilter()">
                </div>
                    <table class="emp-masterlist" style="width: 100%;">
                        <thead>
                            <tr>
                                <th><button><i class="fa-solid fa-arrow-down-wide-short"></i></button> QR</th>
                                <th><button><i class="fa-solid fa-arrow-down-wide-short"></i></button> ID</th>
                                <th><button><i class="fa-solid fa-arrow-down-wide-short"></i></button> Name</th>
                                <th><button><i class="fa-solid fa-filter"></i></button> Role</th>
                                <th><button><i class="fa-solid fa-arrow-down-wide-short"></i></button> Date</th>
                                <th><button><i class="fa-solid fa-filter"></i></button> Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="emp-masterlist-body" >
                            @foreach($employees as $employee)
                            <tr>
                                <td>QR</td>
                                <td>{{$employee ->employee_id}}</td>
                                <td>{{$employee ->fname. " ".$employee ->minitial." ".$employee ->lname}}</td>
                                <td>{{$employee -> position}}</td>
                                <td>{{$employee->bday}}</td>
                                <td>{{$employee ->status}}</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            @endforEach;
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
        
        </script>