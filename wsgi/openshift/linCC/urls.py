from django.conf.urls import patterns, url

from linCC import views
from linCC.views import VarListView

urlpatterns = patterns('',
    url(r'^$', VarListView.as_view()),
)