<form id="contact" action="{{ route('contacts.store') }}" method="post">
    @csrf

    <label for="contact_name">Your name</label>
    <input type="text" name="name" id="contact_name">

    <label for="contact_phone">Phone</label>
    <input type="text" name="phone" id="contact_phone">

    <label for="contact_email">Email</label>
    <input type="email" name="email" id="contact_email">

    <textarea name="description" id="contact_description" cols="30" rows="10"></textarea>

    <input type="submit" value="Send my message">
</form>
