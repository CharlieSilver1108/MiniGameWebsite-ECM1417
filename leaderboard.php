<!-- This is the page which displays the leaderboard of scores with each score's username -->

<!Doctype HTML>
<html lang="en">
    <?php include "navbar.php" ?>

    <style>
        div.dataTables_info {               /* this is the css for the datatable which displays the scores */
            color: white !important;
            margin: 3px;
        }

        label{
            color: white !important;
        }

        input{
            background-color: white !important;
            margin: 3px;
        }
    </style>
    
    <head>
        <title>Leaderboard</title>
        <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" />              <!-- uses datatables to display the scores since it is easily formattable -->
        <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    </head>
    
    <body style="overflow: hidden !important;">

        <div style="background-color: #808080; margin: 30px; border-radius: 5px; box-shadow: 5px 5px;" id="gameDiv">
            
            <div class="card-body">
                <table id="highScoreTable" class="display" style="width:100%; border-spacing: 2px;">
                    <thead style="background-color: #0275d8 !important; color: white !important;">
                        <tr>
                            <th>Username</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            if(($file = fopen("highScores.csv","r")) !== FALSE){
                                
                                while(!feof($file)){                            #uses php to fill the table by reading from the csv file
                                    $csv_line = fgetcsv($file);
                                    if(is_array($csv_line)){
                                        echo "<tr>";
                                        echo "<td>" . $csv_line[0] . "</td>";
                                        echo "<td>" . $csv_line[1] . "</td>";
                                        echo "</tr>";
                                    }
                                }

                                fclose($file);
                            }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

        

    </body>

</body>

<script>
    $(document).ready(function () {
        $('#highScoreTable').DataTable({
            "paging": false,
            order:[[1, 'desc'], [0, 'asc']]
        });
    });
</script>

</html>