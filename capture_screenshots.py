import subprocess
import os
import time

chrome_path = r"C:\Program Files\Google\Chrome\Application\chrome.exe"
out_dir = r"d:\nikolaradeski-reconstruction\screenshots"
os.makedirs(out_dir, exist_ok=True)

viewports = [
    ("1440", 1440, 900),
    ("1024", 1024, 768),
    ("768", 768, 1024),
    ("430", 430, 932),
    ("390", 390, 844),
    ("375", 375, 667)
]

for name, w, h in viewports:
    local_out = os.path.join(out_dir, f"prathish_hero_{name}.png")
    cmd_local = [
        chrome_path,
        "--headless=new",
        "--disable-gpu",
        f"--window-size={w},{h}",
        "--hide-scrollbars",
        "--virtual-time-budget=6000",
        f"--screenshot={local_out}",
        "http://localhost:8080/"
    ]
    print(f"Capturing prathish_hero_{name} ({w}x{h})...")
    subprocess.run(cmd_local, capture_output=True, timeout=30)
    sz = os.path.getsize(local_out) if os.path.exists(local_out) else 0
    print(f"Saved {local_out} (size: {sz} bytes)")

print("Screenshot capture completed.")
