#from django.shortcuts import render_to_response
from django.shortcuts import render

from linCC.models import VarList


def get_db_columns(model):
    # TODO check if is a model
    db_columns = []
    for field in model._meta.fields:
        column_name = field.db_column
        if column_name:
            db_columns.append(column_name)
        else:
            db_columns.append(field.column)
    return db_columns


def index(request):

    var_list = VarList.objects.all()
    db_columns = get_db_columns(VarList)
    return render(request, 'home/home.html', {'var_list': var_list, 'db_columns': db_columns})