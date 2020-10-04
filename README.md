# learning-form
Application with [Land.io, Argon Dashboard &amp; Colorlib] Framework

<p align="center">
  <a href="https://www.fatechid.blog">
    <img src="https://beta.fatechid.com/Login-DekstopView.png" width="600">
  </a>
</p>

<h3 align="left">How the Mail verifycation works?</h3>

[-] First when you follow registration form, system will generate code
with openssl_random_pseudo_bytes as the token for confirmation mail and confirmation table as boolean parameter to false = 0

[-] Then the system will send you link confirmation as token for the main code. I use Swift Mailer for Sender mail
when you click link confirmation mail, the confirmation table which is false as default will change to true = 1
then you can login with your account.

<b>Thanks to Creative Tim, Colorlib, and Land.io with amazing template for free :)</b>
