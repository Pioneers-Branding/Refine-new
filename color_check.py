from PIL import Image
import glob
import os

files = glob.glob('assets/images/refineskinandbodyclinic_2025-02-0*.jpg')

for f in files:
    try:
        img = Image.open(f)
        img = img.resize((50, 50)) # scale down for speed
        pixels = list(img.getdata())
        
        r_total = 0
        g_total = 0
        b_total = 0
        count = len(pixels)
        
        for pixel in pixels:
            # handle cases where pixel might have alpha channel
            r_total += pixel[0]
            g_total += pixel[1]
            b_total += pixel[2]
            
        r_avg = r_total // count
        g_avg = g_total // count
        b_avg = b_total // count
        
        print(f"{os.path.basename(f):40} | Avg RGB: ({r_avg:3}, {g_avg:3}, {b_avg:3}) | Hex: #{r_avg:02x}{g_avg:02x}{b_avg:02x}")
    except Exception as e:
        pass

