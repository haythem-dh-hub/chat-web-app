<?php
        while($row = mysqli_fetch_assoc($sql)){
            $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                    OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id}
                    OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
            $query2 = mysqli_query($conn,$sql2);
            $row2 = mysqli_fetch_assoc($query2);
            // ###### ifound a solution #######
            // ######### \/ ##########
            if (mysqli_num_rows($query2) > 0) {
                // Ensure $row2 is not null before accessing its keys
                $result = isset($row2['msg']) ? $row2['msg'] : "No messages available";
                $you = isset($row2['outgoing_msg_id']) && $outgoing_id == $row2['outgoing_msg_id'] ? "You:" : "";
        
                // trimming messages if word are more than 28  
                $msg = (strlen($result) > 28) ? substr($result, 0, 28) . '...' : $result;
            } else {
                $result = "No messages available";
                $msg = $result;
                $you = "";
            }
            ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
            $output .='
                <a href="chat.php?user_id='.$row['unique_id'].'">
                    <div class="content">
                        <img src="php/images/'. $row['img'] .'" alt="">
                        <div class="details">
                            <span>'. $row['fname'] . " " . $row['lname'] .'</span>
                            <p>'. $you . $msg .'</p>
                        </div>
                    </div>
                    <div class="status-dot '.$offline.'"><i class="fas fa-circle"></i></div>
                </a>';
        }
 
?>