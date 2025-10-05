<div>
<h1>
    Add details for send email
    <form action="send-email" method="POST">
        @csrf
        <input type="text" name="to" placeholder="Enter email"><br><br>
        <input type="text" name="subject" placeholder="Enter Email subject"><br><br>
        <textarea name="msg"  placeholder="Enter Email message"></textarea><br><br>
       <button>Send Email</button>
    </form>
</h1>
</div> 