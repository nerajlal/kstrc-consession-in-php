#pip install pyqrcode
#pip install pypng
#pip install pyzbar
#pip install pillow

import pyqrcode
from pyzbar.pyzbar import decode
from PIL import Image

decocdeQR = decode(Image.open('uploads/hup.png'))
print(decocdeQR[0].data.decode('ascii'))
