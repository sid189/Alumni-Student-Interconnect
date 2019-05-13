<?php
                    $conn=mysqli_connect('localhost','root','','qwerty');
                    // Check connection
                    if (mysqli_connect_errno())
                    {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                    $result = mysqli_query($conn,"SELECT * FROM guidance_section");          

                    while($row = mysqli_fetch_array($result)) {

                        echo "<td>".$row['alumni_name'] ."</td>";
                        echo "<td>".$row['emaid_id'] ."</td>";
                        echo "<td>".$row['contact_number'] ."</td>";
                      
              echo "</td>";
                    }
                    mysqli_close($conn);

                    header("Location: guidance.html");
              ?>