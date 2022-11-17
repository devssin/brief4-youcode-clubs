<?php
    include "./connect.php";
    
    
    if(isset($_POST["displaySend"])){
        $table = '<table class="table text-center align-items-center">
        <thead class="bg-dark text-white ">
            <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">firstname</th>
                <th scope="col">age</th>
                <th scope="col">class_belong</th>
                <th scope="col">club nom</th>
                <th scope="col">role in club </th>
                <th scope="col">operation</th>
            </tr>
        </thead>
        <tbody>';
        
        // $sql = "SELECT * FROM apprenant INNER JOIN membre ON 
        // id = membre.id_membre INNER JOIN club ON
        // id_club = club.id;";
        
        $sql = "SELECT * FROM apprenant" ;
        
        
        $result = mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_assoc($result)){
            //variables name 
            $firstname =$row['nom_c'];
            $member_id = $row['id'];
            $imglink =$row['img'];
            $age =$row['age'];
            $class_belong =$row['id_class'];
            $club_nom ="";
            $role ="";



            $ClubMembreQuery = "SELECT * from membre  INNER JOIN club  ON 
            club.id = membre.id_club AND id_membre = $member_id";
            
            $clubMembreResult = mysqli_query($conn,$ClubMembreQuery);
            while($rowClubMembre = mysqli_fetch_assoc($clubMembreResult)){
                
                if($member_id === $rowClubMembre["id_membre"]){
                    $club_nom = $rowClubMembre['nom'];
                    $role = $rowClubMembre['role'];
                    break;
                }
            }


            $table .='
            <tr class="text-center align-items-center">
                <th scope="row">'.$member_id.'</th>
                <td><img class="apprenat-img-profile" src='.$imglink.' /></td>
                <td>'.$firstname.'</td>
                <td>'.$age.'</td>
                <td>'.$class_belong.'</td>
                <td>'.$club_nom.' <a type="button" class="" data-bs-toggle="modal" onclick="" data-bs-target="#ClubUpdateModal" ><i class="fa-regular fa-pen-to-square"></i></a></td>
                <td>'.$role.' <i class="fa-regular fa-pen-to-square"></i></td>
                <td>
                    <button class="btn my-1 btn-danger" onclick="deleteUser('.$member_id.')"> Delete</button>
                    <button type="button" class="btn btn-dark my-4" data-bs-toggle="modal" onclick="GetUpdateUser('.$member_id.')" data-bs-target="#UpdateModal"> update</button>
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