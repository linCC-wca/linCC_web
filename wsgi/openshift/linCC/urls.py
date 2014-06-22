from django.conf.urls import patterns, url

from linCC import views
from linCC.views import HomeView
from linCC.views import VarListView
from linCC.views import PLCConnectionsView

urlpatterns = patterns('',
    url(r'^$', HomeView.as_view()),
    url(r'^tables/varlist$', VarListView.as_view()),
    url(r'^tables/plcconnection$', PLCConnectionsView.as_view()),
)
