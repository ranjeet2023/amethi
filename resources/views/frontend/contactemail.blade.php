<!DOCTYPE html>
<html>
<head>
  <style>
    /* Add your own custom styles here */
    body {
      font-family: Arial, sans-serif;
      background-color: #e16868;
      padding: 20px;
    }
    .card {
      max-width: 600px;
      margin: 0 auto;
      background-color: #0c0cc848;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }
    h1 {
      color: #333333;
      margin-top: 0;
    }
    p {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Contact Email From Amethitech</h1>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['number'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{$data['message']}}</p>
    <hr>
    <p>Thank you for contacting us. We will get back to you as soon as possible.</p>
    <p>Best regards,<br>
    AmethiTech</p>
  </div>
</body>
</html>
