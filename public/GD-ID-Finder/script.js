const urlInput = document.getElementById("urlInput");
const extractButton = document.getElementById("extractButton");
const resultDiv = document.getElementById("result");

extractButton.addEventListener("click", () => {
  const url = urlInput.value;
  const id = extractGoogleDriveId(url);

 if (id) {
    resultDiv.textContent = "Download Link:" + " https://plyr.0-0-0.click/download.html?id=" + id + "   Player Link: " + " https://plyr.0-0-0.click/GD-Plyr/embed.php?id=" + id;

  } else {
    resultDiv.textContent = "Invalid Google Drive URL";
  }

});

function extractGoogleDriveId(url) {
  const idRegex = /[-\w]{25,}/; // Match 25+ alphanumeric and hyphen characters

  const match = url.match(idRegex);
  if (match) {
    return match[0];
  } else {
    return null;
  }
}
