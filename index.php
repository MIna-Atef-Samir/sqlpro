<?php include 'header.php'; ?>



<div class="container">
    <form class="w-75 mx-auto" action="checkdata.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="image">Your Image</label> <br>
            <input name="image" type="file"  id="image">
        </div>
        <div class="form-group">
            <label for="address">Adress</label>
            <input name="address" type="text" class="form-control" id="address">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input name="phone" type="text" class="form-control" id="phone">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input name="status" type="text" class="form-control" id="status">
        </div>
        <div class="form-group">
            <label for="comment">About you</label>
            <textarea name="comment" class="form-control" id="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-primary form-control">Submit</button>
    </form>
</div>


























<?php include 'footer.php'; ?>

