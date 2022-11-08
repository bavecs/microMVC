<h1>
    <?=$title ?>
</h1>
<h2>
    Contact page
</h2>
<form method="post" action="contact">

    <div class="field">
        <label class="label">Name</label>
        <div class="control">
            <input class="input" type="text" name="name" placeholder="Text input">
        </div>
    </div>


    <div class="field">
        <label class="label">Message</label>
        <div class="control">
            <textarea class="textarea" name="message" placeholder="Textarea"></textarea>
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <input type="submit" class="button is-link"></input>
        </div>
        <div class="control">
            <button class="button is-link is-light">Cancel</button>
        </div>
    </div>
</form>