<?php
    include('core/header.php');
    if(!isset($_SESSION["uid"])){
        header('Location: index.php');
        die();
    }
    
?>
<div class="container" style="margin-top:200px;">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>UID</th>
                <td></td>
            </tr>
            <tr>
                <th>Username</th>
                <td></td>
            </tr>
            <tr>
                <th>Email</th>
                <td></td>
            </tr>
            <tr>
                <th>Full Name</th>
                <td></td>
            </tr>
            <tr>
                <th>Date of birth</th>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
<?php  
    include('core/footer.php');
?>