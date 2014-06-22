from django.shortcuts import render
from django.views.generic import View

from linCC.models import VarList as VarListModel
from linCC.models import PLCConnections as PLCConnectionsModel



class HomeView(View):

    template_name = 'home.html'

    def get(self, request, *args, **kwargs):
        return render(request, self.template_name, {
            'tables': [
                'varList',
                'PLCConnection'
            ]
        })



class VarListView(View):

    template_name = 'tables/varlist.html'

    def get(self, request, *args, **kwargs):
        var_list = VarListModel.objects.all()
        db_columns = self.get_db_columns()
        return render(request, self.template_name, {
            'var_list': var_list,
            'db_columns': db_columns
        })

    def get_db_columns(self):
        db_columns = {}
        for field in VarListModel._meta.fields:
            column_name = field.db_column
            if column_name:
                # db_columns.append(column_name)
                db_columns[field.name] = column_name
            else:
                db_columns[field.name] = field.column
        return db_columns



class PLCConnectionsView(View):

    template_name = 'tables/plcconnection.html'

    def get(self, request, *args, **kwargs):
        connections = PLCConnectionsModel.objects.all()
        db_columns = self.get_db_columns()
        return render(request, self.template_name, {
            'connections': connections,
            'db_columns': db_columns
        })

    def get_db_columns(self):
        db_columns = {}
        for field in PLCConnectionsModel._meta.fields:
            column_name = field.db_column
            if column_name:
                # db_columns.append(column_name)
                db_columns[field.name] = column_name
            else:
                db_columns[field.name] = field.column
        return db_columns
