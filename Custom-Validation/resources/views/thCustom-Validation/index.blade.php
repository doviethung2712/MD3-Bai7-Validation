<div class="content">
    <div class="title m-b-md">
        Laravel Cusstom Validation
    </div>
    <div class="form-custom-validation">
        <form action="" method="get">
            <label for="name">Name: </label>
            <input id="name" name="name" type="text" placeholder="Enter the full name">
            <p>{{ ($error->has('name') ? $error->first('name') : "" )}}</p>
            <br>
            <label for="age">Age: </label>
            <input id="age" name="age" type="text" placeholder="Enter the age">
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
