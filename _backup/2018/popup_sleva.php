<!-- Contact Form -->

<div id="contactdiv">
    <div class="sede-pozadi"></div>
    <form method="post" action="./?slevovy-kod-sent=1" id="popupcontent">

        <img src="https://www.test-pneumatik.cz/img/bullet-cross.png" class="img" alt='<? echo $content['close']; ?>' id="cancel"/>

        <br />
        <label for="email"><big><? echo $content['slevovykod_label']; ?></big></label>
        <input id="email" name="insert_email" type="email" />
        <p style="line-height: 1;"><small><? echo $content['popup_agreement']; ?></small></p>
        <input id="" name="fullform" type="hidden" value="1" />

        <button id="full_form" type="submit"><? echo $content['slevovykod_button']; ?></button><br />

        <br />
        <br />

    </form>
</div>
