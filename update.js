const fs = require("fs");

const SOURCE_FILE = "kablotv.m3u";
const TARGET_FILE = "SSKBL.m3u";

function convertLine(line) {
  // https yerine http
  line = line.replace("https://ottcdn.kablowebtv.net", "http://ottcdn.kablowebtv.net");

  // wmsAuthSign parametresini koru
  const match = line.match(/wmsAuthSign=[A-Za-z0-9]+/);
  if (match) {
    console.log("Bulunan wmsAuthSign:", match[0]);
  }

  return line;
}

function updatePlaylist() {
  const lines = fs.readFileSync(SOURCE_FILE, "utf-8").split("\n");
  const updatedLines = lines.map(convertLine);
  fs.writeFileSync(TARGET_FILE, updatedLines.join("\n"), "utf-8");
  console.log(`Playlist güncellendi: ${TARGET_FILE}`);
}

updatePlaylist();
