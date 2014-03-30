from django.test import TestCase

from linCC.views import VarListView



class VarListViewTestCase(TestCase):
    def test_check_db_columns(self):
        v = VarListView()
        self.maxDiff = None
        self.assertEqual(
            v.get_db_columns(),
            {
                'id'     : 'id',
                'name'   : 'tagName',
                'type'   : 'tagType',
                'plc_num': 'tagPLCNo',
                'access' : 'tagAccess',
                'db'     : 'tagDB',
                'byte'   : 'tagBYTE',
                'bit'    : 'tagBIT',
                'r_val'  : 'rValue',
                'w_val'  : 'wValue',
                'w_flag' : 'wFlag',
                'comment': 'tagComment',
            }
        )
