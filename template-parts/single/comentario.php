<form class="leave-form-box">
    <div class="row">
        <div class="col-12 form-group">
            <label>Comment :</label>
            <textarea placeholder="" class="textarea form-control" name="message" rows="7" cols="20" data-error="Message field is required" required></textarea>
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-lg-4 form-group">
            <label>Name :</label>
            <input type="text" placeholder="" class="form-control" name="name" data-error="Name field is required" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-lg-4 form-group">
            <label>E-mail :</label>
            <input type="email" placeholder="" class="form-control" name="email" data-error="E-mail field is required" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-lg-4 form-group">
            <label>Website :</label>
            <input type="email" placeholder="" class="form-control" name="email" data-error="E-mail field is required" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-12 form-group mb-0">
            <button type="submit" class="item-btn">POST REVIEW</button>
        </div>
    </div>
    <div class="form-response"></div>
</form>