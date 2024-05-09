import os

# ระบุ directory ที่มีไฟล์ txt
directory = 'C:\\Users\\tanin\\Downloads\\test_py_merge'  # เปลี่ยนเป็นที่อยู่ของโฟลเดอร์ที่คุณต้องการใช้

# เปิดไฟล์ output สำหรับเขียนไฟล์ที่รวมทั้งหมด
with open('combined_file.txt', 'w', encoding='utf-8') as combined_file:
    # วนลูปในไฟล์ทั้งหมดใน directory
    for filename in os.listdir(directory):
        if filename.endswith('.txt'):
            file_path = os.path.join(directory, filename)
            # เปิดและอ่านข้อมูลจากไฟล์แล้วเขียนลงในไฟล์ที่รวม
            with open(file_path, 'r', encoding='utf-8') as file:
                combined_file.write(file.read())
                combined_file.write('\n')  # เพิ่มบรรทัดว่างระหว่างไฟล์
