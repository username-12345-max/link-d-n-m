const fs = require("fs");
const axios = require("axios");

// Kaynak playlist URL'sini buraya yaz
const SOURCE_URL = "https://borutv.boncuuktv.workers.dev/kablotv.m3u";
const TARGET_FILE = "SSKBL.m3u";

async function updatePlaylist() {
  try {
    // Kaynak playlisti internetten çek
    const response = await axios.get(SOURCE_URL);
    const lines = response.data.split("\n");

    // HTTPS → HTTP dönüşümü ve wmsAuthSign parametresini koruma
    const updatedLines = lines.map(line => {
      if (line.startsWith("https://ottcdn.kablowebtv.net")) {
        // URL içindeki wmsAuthSign parametresini koruyarak http'ye çevir
        return line.replace("https://ottcdn.kablowebtv.net", "http://ottcdn.kablowebtv.net");
      }
      return line;
    });

    // Yeni playlist dosyasını yaz
    fs.writeFileSync(TARGET_FILE, updatedLines.join("\n"), "utf-8");
    console.log(`Playlist güncellendi: ${TARGET_FILE}`);
  } catch (err) {
    console.error("Playlist çekilirken hata:", err.message);
  }
}

updatePlaylist();
