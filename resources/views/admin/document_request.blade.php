<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "/assets/Oikos Logo.png">
    <link rel="stylesheet" href = "/CSS/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- implemented sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Oikos Admin: Document Request</title>
    <style>
        .doc-body{
            background-color: #f2f2f2;
            margin: 1em;
            padding: 0;
            display: flex;
        }
        .doc-filter-container{
            background-color: #323468;
            color: #fff;
            padding: 15px;
            text-align: left;
            display: flex;
            flex-direction: row-reverse; /* Reverse the order of elements */
            align-items: center;
            width: 100%;
        }
        .docreq-container{
            width: 100%;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .search-container {
            display: flex;
            align-items: center;
            float: right;
        }
        .search-container input[type="text"] {
            padding: 8px;
            margin-right: 5px;
        }
        .search-btn {
            padding: 8px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .document-type {
            background-color: #f2f2f2;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .document-type td {
            border: 1px solid #dddddd82;
            padding: 5px;
            text-align: center;
        }
        .document-type th {
            border: 1px solid #dddddd00;
            padding: 5px;
            text-align: center;
            background-color: #323468;
            color: #fff;
        }
        .document-type tr:nth-child(even) {
            background-color: #cacaca;
        }
        .document-type tr:hover {
            background-color: #e8e6e6;
        }
        .docreq-container i {
            font-size: 1.2em;
            float: right;
            margin-right: 2em;
            cursor: pointer;
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
            width:50em;
            display:flex;
            flex-direction:column;
            padding:2em;
        }
        .form-header{
            display:flex;
            justify-content:space-between;
            align-items:center;
        }
        #form-content .form-group{
            display:flex;
            flex-direction:column;
        }
        .input-group{
            padding:0.8em;
            width:25%;
            display:flex;
            flex-direction:column;
        }
        .input-group-special{
            padding:.8em;
            width:50%;
            display:flex;
            flex-direction:column;
        }
        .input-field{
            border:none; 
            font-size:1rem;
            border-bottom:1px solid #dedede;
        }
        .form-group-file {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
        }

        .input-group-file {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        .input-group-file input[type="file"] {
            margin-top: 5px;
        }
        textarea{
            resize:none;
            font-family:sans-serif;
            font-size:1rem;
            padding:.5rem;
        }
        .submit-group{
            display: flex;
            justify-content: center;
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
            width: 30%;
        }
        .btn-reject{
            padding:1em;
            background-color:#DE3A3B;
            font-size:.8rem;
            font-weight:bold;
            color:white;
            border:none;
            border-radius: 15px;
            transition:opacity 150ms ease-in-out;
            width: 30%;
            margin-left: 10px;
        }
        .btn-submit:hover{
            cursor: pointer;
            opacity:75%;
        }
        .btn-reject:hover{
            cursor: pointer;
            opacity:75%;
        }
        .hidden{
            visibility:hidden;
            opacity:0;
        }

    </style>
</head>
<body>
    @include('component.admin.sidenav')
    <div class="modal-mask hidden">
        <div class="form-container">
            <div class="form-header">
                <h2>Requested Document</h2>
                <i class="far fa-times-circle" style="font-size:1.3rem;cursor:pointer;"></i>
            </div>
            <form id="form-content" style = "margin-top: 10px;">
                <div class="form-group" style = "flex-direction: row;">
                    <div class="input-group">
                        <input type="text" class='input-field' id='requestor-name' value="WATSON, AMELIA" readonly>
                        <label for="requestor-name">Requestor Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='request-code' value="CPE-2024- 01-00001" readonly>
                        <label for="request-code">Request Code</label>
                    </div>
                    
                    <div class="input-group">
                        <input type="text" class='input-field' id='date-requested' value="Jan 01, 2024" readonly>
                        <label for="date-requested">Date Requested</label>
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="input-group-special">
                        <input type="text" class='input-field' id='request-type' value="Certificate of Good Moral Character" readonly>
                        <label for="request-type">Request Type</label>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="reason">Reason</label>
                    <textarea id="reason" cols="30" rows="10" readonly></textarea>
                </div>
                <br>
                <div class="form-group-file">
                    <div class="input-group-file">
                        <label for="attachment">Attachment</label>
                        <input type="file" id="attachment" name="attachment">
                    </div>
                </div>
                <br><br>
                <div class="submit-group">
                    <button class="btn-submit">Approve</button>
                    <button class="btn-reject">Reject</button>
                </div>
            </form>
        </div>
    </div>

    <div class="main-content">
        <h1>Document Request</h1>
        <div class="doc-body">
            <div class="docreq-container">
                <div class="doc-filter-container">
                    <div class="search-container">
                        <input type="text" placeholder="Search..." style = "border-radius: 5px; margin-left: 10px;">
                        <button class="search-btn">&#128269;</button>
                    </div>
                    <input type="date" id="date" style = "border-radius: 5px; padding: 7px; margin-left: 10px;">
                    <label for="date">Date: </label>
                </div>
                <table style = "width: 100%;" class="document-type">
                    <thead>
                        <tr>
                            <th colspan="1">Request Code</th>
                            <th colspan="1">Requestor Name</th>
                            <th colspan="1">Date Requested</th>
                            <th colspan="1">Request Type</th>
                            <th colspan="1">Status</th>
                            <th colspan="1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>CPE-2024- 01-00001</td>
                            <td>Amelia Watson</td>
                            <td>Jan 01, 2024</td>
                            <td>Certificate of Good Moral Character</td>
                            <td>Pending</td>
                            <td>
                                <i class="fas fa-edit"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script>
        let toggleModal=document.querySelector('.fas');
        let showModal=document.querySelector('.modal-mask');
        let closeModal=document.querySelector('.far');
        
        toggleModal.onclick=()=>{
            showModal.classList.remove('hidden');
        }
        closeModal.onclick=()=>{
            showModal.classList.toggle('hidden');
        }
        btn.onclick = function () {
            sidebar.classList.toggle('active');
        }

    </script>
    <script src="/JS/navevent.js"></script>      
    
</body>
</html>