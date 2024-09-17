<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Data ThingSpeak</title>
</head>
<body>

<h1>Delete Data ThingSpeak</h1>

<button onclick="deleteData()">Hapus Data</button>

<script>
function deleteData() {
  // Ganti dengan Channel ID dan API Key yang sesuai
  const channelID = '2341798';
  const apiKey = 'HARKQVCMFGAZABRY';

  const url = `https://api.thingspeak.com/channels/${channelID}/feeds.json?api_key=${apiKey}`;

  // Buat permintaan HTTP DELETE menggunakan Fetch API
  fetch(url, { method: 'DELETE' })
    .then(response => {
      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
    })
    .then(data => {
      console.log('Data berhasil dihapus:', data);
      alert('Data berhasil dihapus!');
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Terjadi kesalahan saat menghapus data.');
    });
}
</script>

</body>
</html>
