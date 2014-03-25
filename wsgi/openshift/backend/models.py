from django.db import models


class TinyIntegerField(models.SmallIntegerField):
    """ custom field, representing 'tinyint' in mysql """

    def db_type(self, connection):
        if connection.settings_dict['ENGINE'] == 'django.db.backends.mysql':
            return "tinyint"
        else:
            return super(TinyIntegerField, self).db_type(connection)

class MediumIntegerField(models.IntegerField):
    """ custom field, representing 'mediumint' in mysql """

    def db_type(self, connection):
        if connection.settings_dict['ENGINE'] == 'django.db.backends.mysql':
            return "mediumint"
        else:
            return super(MediumIntegerField, self).db_type(connection)



class varList(models.Model):

    name = models.CharField(
        verbose_name = 'name', db_column = 'tagName',
        max_length = 50,
    )
    type = TinyIntegerField(
        verbose_name = 'type', db_column = 'tagType',
    )
    plc_num = TinyIntegerField(
        verbose_name = 'PLCnumber', db_column = 'tagPLCNo',
    )
    db = models.SmallIntegerField(
        db_column = 'tagDB',
    )
    byte = MediumIntegerField(
        db_column = 'tagBYTE',
    )
    bit = TinyIntegerField(
        db_column = 'tagBIT',
    )
    r_val = models.FloatField(
        db_column = 'rValue',
        null=True,
    )
    w_val = models.FloatField(
        db_column = 'wValue',
        null=True,
    )
    w_flag = TinyIntegerField(
        verbose_name = 'type', db_column = 'wFlag',
        null=True,
    )
    comment = models.CharField(
        verbose_name = 'comment', db_column = 'tagComment',
        max_length=100,
    )

    class Meta:
        db_table = 'varList'

    def __str__(self):
        return self.tagName



class PLCConnections(models.Model):

    name = models.CharField(
        verbose_name = 'name', db_column = 'PLCName',
        max_length = 10,
    )
    type = TinyIntegerField(
        verbose_name = 'type', db_column = 'PLCType', db_index = True
    )
    rack = TinyIntegerField(
        verbose_name = 'rack', db_column = 'PLCRack',
    )
    slot = TinyIntegerField(
        verbose_name = 'slot', db_column = 'PLCSlot',
    )
    ip = models.IPAddressField(
        verbose_name = 'IP', db_column = 'PLCIp',
    )
    conn_port = models.SmallIntegerField(
        verbose_name = 'connection port', db_column = 'PLCConPort',
    )
    desc = models.CharField(
        verbose_name = 'description', db_column = 'PLCDesc',
        max_length = 100, null = True,
    )

    class Meta:
        db_table = 'PLCConnections'

    def __str__(self):
        return '%s' % self.PLCIp



class tagType(models.Model):

    name = models.CharField(max_length="10")

    class Meta:
        db_table = "tagType"

    def __str__(self):
        return self.name