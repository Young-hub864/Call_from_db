 <table class="table table-bordered mg-b-0 text-md-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Fname</th>
                                            <th>Lname</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>class </th>
                                            <th></th>
                                                                
                                        </tr>
                                    </thead>
                                  <tbody>
                                    <tr>
                                        <?php
                                            $sql = "SELECT * FROM applicants";
                                            $result = $conn->query($sql);                
                                            if($result->num_rows > 0 ){
                                                // output of data each row 
                                                while($row = $result->fetch_assoc()){
                                        ?>
                                    </tr>
                                    <tr>
                                        <td><?php echo ++$counter; ?></td>
                                        <td><?php echo $row['fname']; ?></td>
                                        <td><?php echo $row['lname']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['class']; ?></td>
                                        <td><a href="single-students-info.php?sid=<?php echo $row['ID']; ?>" class=" btn btn-sm btn-success" style="text-decoration:none"> View</a></td>
                                    </tr> 
                                        <?php
                                                }
                                            }
                                        ?> 
                                       

                                        </tr>
                                  </tbody>
                                </table>