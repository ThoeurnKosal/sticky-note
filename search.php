<!DOCTYPE html>
<html>
<head>
  <title>Khmer Note</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./public/vendor/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src= "./public/vendor/jquery/jquery-3.2.1.min.js"></script>
  
  <script type="text/javascript" src="./public/vendor/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./public/css/style.css">
</head>
<body>

        <!-- Menu-->
<nav class="navbar navbar-toggleable-md navbar-light bg-faded navbar navbar-light" style="background-color: #e3f2fd;" >
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php"><b>Khmer Note</b></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active" >
        <a class="nav-link" href="#">Reminder</a>
      </li>
    </ul>

    <!-- Button Search-->

    <form action="search.php" class="form-inline my-2 my-lg-0">
      <input name = "query" class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0"  >
      Search
      </button>   
    </form>
  </div>
</nav>
<br>
<br>

          <!--button add note -->
  <div class="col-md-6">
  <button type="button" action="logout.php" class="btn btn-danger">Logout </button>
  </div>

 <div class="col-sm-4">
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add new note </button>
 </div>

<form name="newNote" action="createnotedb.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" name="title" class="form-control-label">Title:</label>
            <input name="title" type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label  for="message-text" name="note" class="form-control-label">Take a note:</label>
            <textarea name="content" class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <button name = "newnote" type="submit" class="btn btn-primary" >Done</button>

      </div>
    </div>
  </div>
</div>
</form>
<br>
<br>





<div class="grid"> 
<?php  
  require_once('databaseconfig.php');
  $query = $_GET['query'];
  $sql = "select * from notes where title like '%$query%' UNION
  select * from notes where content like '%$query%' ";
    
    $result = $conn->query($sql);
    while($row = $result->fetch_object()){
      echo "  <div class='grid-item'>  
          <div class='divtitle'>
            <div style='margin: 0 auto; width: 100%;' alt='Brand' data-toggle='modal' data-target='#exampleModal2' data-whatever='@mdo'  onclick='editNote('$row->id)'>
              <b class='title'> 
                $row->title 
              </b> 
            </div>
          </div>
          <div class='textnote' alt='Brand' data-toggle='modal' data-target='#exampleModal2' data-whatever='@mdo' onclick='editNote($row->id)'>
            $row->content
            <br>
          </div>
          <div>
            <form name='removenote' action='removenote.php' method='post'>
              <button type='submit' name='delete' value='$row->id' class='buttondelete'>
                <img class='removetext' src='public/img/remove.png' value='$row->id' name='removeid'>
              </button> 
            </form>
          </div>
        </div>";
   }
?>
</div>
<script type="text/javascript" src="./public/vendor/jquery/jquery-3.2.1.min.js">
</script>
<script type="text/javascript" src = "./public/js/masonry.js"> </script>
</body>
</html>