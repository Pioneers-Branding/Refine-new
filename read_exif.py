from PIL import Image
from PIL.ExifTags import TAGS
import glob

files = glob.glob('assets/images/refineskinandbodyclinic_2025-02-0*.jpg')
files.append('assets/images/refineskinandbodyclinic_2025-03-08_DG7M4mXox-h.jpg')

for f in files:
    try:
        img = Image.open(f)
        exifdata = img.getexif()
        print(f"--- {f} ---")
        if not exifdata:
            print("No EXIF data")
        for tag_id in exifdata:
            tag = TAGS.get(tag_id, tag_id)
            data = exifdata.get(tag_id)
            if isinstance(data, bytes):
                data = data.decode()
            print(f"{tag:25}: {data}")
    except Exception as e:
        print(f"Error reading {f}: {e}")

