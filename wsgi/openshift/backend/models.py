from django.db import models

# TODO define tinyint field for some model's fields
# TODO missing desc in some
# TODO check varList rValue, wValue parameter



class TinyIntegerField(models.SmallIntegerField):
    """ custom field, representing 'tinyint' in mysql """

    def db_type(self, connection):
        if connection.settings_dict['ENGINE'] == 'django.db.backends.mysql':
            return "tinyint"
        else:
            return super(TinyIntegerField, self).db_type(connection)

class MediumIntegerField(models.IntegerField):
    """ custom field, representing 'tinyint' in mysql """

    def db_type(self, connection):
        if connection.settings_dict['ENGINE'] == 'django.db.backends.mysql':
            return "mediumint"
        else:
            return super(TinyIntegerField, self).db_type(connection)



class varList(models.Model):
    tagName    = models.CharField("name", max_length="50")
    tagType    = TinyIntegerField("type")
    tagPLCNo   = TinyIntegerField("PLC number")
    tagDB      = models.SmallIntegerField()
    tagBYTE    = MediumIntegerField()
    tagBIT     = TinyIntegerField()
    rValue     = models.FloatField(null=True)
    wValue     = models.FloatField(null=True)
    wFlag      = TinyIntegerField("type", null=True)
    tagComment = models.CharField("comment", max_length="100")

    class Meta:
        db_table = "varList"



class PLCConnections(models.Model):
    PLCType    = TinyIntegerField("type")
    PLCRack    = TinyIntegerField("rack")
    PLCSlot    = TinyIntegerField("slot")
    PLCIp      = models.IPAddressField("IP")
    PLCConPort = models.SmallIntegerField("connection port")
    PLCDesc    = models.CharField("description", max_length="100")

    class Meta:
        db_table = "PLCConnections"



class tagType(models.Model):
    name = models.CharField(max_length="10")

    class Meta:
        db_table = "tagType"