import boto3

s3 = boto3.resource('s3')

pages = ['index.html','computertutor.html']
for page in pages:
  object_acl = s3.ObjectAcl('kresna.xyz',page)
  response = object_acl.put(ACL='public-read')

