<form action="?submit" method="post" class="-mar-bottom">

    <input type="hidden" name="contactform" value="true">

    <input type="text" name="registration_type" style="display: none;" tabindex="-1" autocomplete="off">
    <input type="text" name="form-nonce" style="display: none;" tabindex="-1" autocomplete="off">



    <div class="columns">

        <div class="column field -width-1/2 -width-1/1@sm -width-1/1@xs">
            <label for="fld-fname" class="field__label">First Name</label>
            <input id="fld-fname" name="onc5khko" value="" required>
        </div>

        <div class="column field -width-1/2 -width-1/1@sm -width-1/1@xs">
            <label for="fld-lname" class="field__label">Last Name</label>
            <input id="fld-lname" name="sk5tyelo" value="" required>
        </div>

        <div class="column field -width-1/2 -width-1/1@sm -width-1/1@xs">
            <label for="fld-email" class="field__label">Email</label>
            <input id="fld-email" type="email" name="mi0moecs" value="" required>
            <small class="field__tip">Please provide a valid email address.</small>
        </div>

        <div class="column field -width-1/2 -width-1/1@sm -width-1/1@xs">
            <label for="fld-phone" class="field__label">Phone <small>(optional)</small></label>
            <input id="fld-phone" type="tel" name="telephone" value="">
        </div>

        <div class="column field -width-1/1">
            <label for="fld-subject" class="field__label">Subject <small>(optional)</small></label>
            <input id="fld-subject" name="subject" value="">
        </div>

        <div class="column field -width-1/1">
            <label for="fld-comments" class="field__label">Message</label>
            <textarea id="fld-comments" cols="32" rows="6" name="comments" required></textarea>
        </div>

        <div class="column field -width-1/1">
            {opt_in}
        </div>

    </div>

    <div class="buttons">
        <button type="submit" class="button button--strong button--pill">Send Email</button>
    </div>

</form>