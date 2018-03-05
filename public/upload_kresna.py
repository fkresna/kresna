import boto3

s3 = boto3.resource('s3')

pages = ['index.html','computertutor.html']
for page in pages:
  s3.Bucket('kresna.xyz').upload_file(page,page)
