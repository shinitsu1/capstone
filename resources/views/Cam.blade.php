<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FleetLink</title>
  <style>
    .container {
      width: 100px;
      height: 100px;
      border-radius: 10px;
      background-color: #e0e0e0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      cursor: pointer; /* Add this to make the container clickable */
    }

    .icon {
      max-width: 100%;
      max-height: 100%;
    }

    .text {
      margin-top: 5px;
      font-size: 12px;
    }
  </style>
</head>
<body>
  <div class="container" onclick="openDefaultCamera()">
    <img src="{{ asset('images/Scan_QR.jpg') }}" alt="Logo" class="icon">
    <div class="text">Scan QR Code</div>
  </div>

  <script>
    function openDefaultCamera() {
      // Use the HTML5 capture attribute to trigger the device's default camera
      const videoElement = document.createElement('video');
      videoElement.setAttribute('autoplay', 'true');
      videoElement.setAttribute('playsinline', 'true');

      // Add the video element to the document body
      document.body.appendChild(videoElement);

      // Use the navigator.mediaDevices.getUserMedia API to access the camera
      navigator.mediaDevices.getUserMedia({ video: true })
        .then((stream) => {
          // Assign the camera stream to the video element
          videoElement.srcObject = stream;
        })
        .catch((error) => {
          console.error('Error opening camera:', error);
        });
    }
  </script>
</body>
</html>
