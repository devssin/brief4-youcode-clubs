<?php
    include "../apprenant/connect.php";
    
    
    if(isset($_POST["displaySend"])){
        $table = '<table class="table text-center align-items-center">
        <thead class="bg-dark text-white ">
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">Logo</th>
                <th scope="col">Nombre des membres</th>
                <th scope="col">Date de creation</th>
                <th scope="col">operation</th>
            </tr>
        </thead>
        <tbody>';
        
        $sql = "SELECT * FROM club";
        
        $result = mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_assoc($result)){
            $id =$row['id'];
            $nom = $row['nom'];
            $logo =$row['logo'];
            $date = $row['date_creation'];
            $sqlCount = mysqli_query($conn,'SELECT COUNT(*) AS "Nombre des membres" from membre where id_club ='.$id);
            
            $count = mysqli_fetch_assoc($sqlCount);

            $table .='
            <tr class="">
                <th scope="row">'.$id.'</th>
                <td>'.$nom.'</td>
                <td><img src='.$logo.' style="width : 100px !important;"/></td>
                <td>'.$count['Nombre des membres'].'</td>
                <td>'.$date.'</td>
                <td>
                    <button class="btn my-1 btn-danger" onclick="deleteClub('.$id.')"> Delete</button>
                    <button type="button" class="btn btn-dark my-4" data-bs-toggle="modal" onclick="GetUpdateUser('.$id.')" data-bs-target="#UpdateModal"> update</button>
                </td>
            </tr>
            ';
        }
        
        $table .='
        </tboday>
        </table>';
        
        echo $table;
    }

?>