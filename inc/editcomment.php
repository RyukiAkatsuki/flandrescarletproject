<form method='POST' action='".setComments($conn)."'>
            <input type='hidden' name='uid' value='Anonymous'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name='message'></textarea><br>
            <button type='submit' name='commentSubmit'>Comment</button>
        </form>";

