<?php
/**
 * Kopa Get Google Font List
 *
 * @author      Kopatheme
 * @category    Core
 * @package     KopaFramework/Functions
 * @since       1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Get google font list of object with all properties
 * 
 * @see https://developers.google.com/fonts/docs/developer_api
 * @version 20140723
 *
 * @since 1.0.0
 */
function kopa_google_font_property_list() {
	return apply_filters( 'kopa_google_font_list', json_decode('{
 "kind": "webfonts#webfontList",
 "items": [
  {"kind": "webfonts#webfont",
   "family": "ABeeZee",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/abeezee/v3/mE5BOuZKGln_Ex0uYKpIaw.ttf",
    "italic": "http://fonts.gstatic.com/s/abeezee/v3/kpplLynmYgP0YtlJA3atRw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Abel",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/abel/v4/RpUKfqNxoyNe_ka23bzQ2A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Abril Fatface",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v7",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/abrilfatface/v7/X1g_KwGeBV3ajZIXQ9VnDojjx0o0jr6fNXxPgYh_a8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Aclonica",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/aclonica/v5/M6pHZMPwK3DiBSlo3jwAKQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Acme",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/acme/v4/-J6XNtAHPZBEbsifCdBt-g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Actor",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/actor/v4/ugMf40CrRK6Jf6Yz_xNSmQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Adamina",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/adamina/v6/RUQfOodOMiVVYqFZcSlT9w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Advent Pro",
   "category": "sans-serif",
   "variants": [
    "100",
    "200",
    "300",
    "regular",
    "500",
    "600",
    "700"
   ],
   "subsets": [
    "greek",
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "100": "http://fonts.gstatic.com/s/adventpro/v3/87-JOpSUecTG50PBYK4ysi3USBnSvpkopQaUR-2r7iU.ttf",
    "200": "http://fonts.gstatic.com/s/adventpro/v3/URTSSjIp0Wr-GrjxFdFWnGeudeTO44zf-ht3k-KNzwg.ttf",
    "300": "http://fonts.gstatic.com/s/adventpro/v3/sJaBfJYSFgoB80OL1_66m0eOrDcLawS7-ssYqLr2Xp4.ttf",
    "regular": "http://fonts.gstatic.com/s/adventpro/v3/1NxMBeKVcNNH2H46AUR3wfesZW2xOQ-xsNqO47m55DA.ttf",
    "500": "http://fonts.gstatic.com/s/adventpro/v3/7kBth2-rT8tP40RmMMXMLJp-63r6doWhTEbsfBIRJ7A.ttf",
    "600": "http://fonts.gstatic.com/s/adventpro/v3/3Jo-2maCzv2QLzQBzaKHV_pTEJqju4Hz1txDWij77d4.ttf",
    "700": "http://fonts.gstatic.com/s/adventpro/v3/M4I6QiICt-ey_wZTpR2gKwJKKGfqHaYFsRG-T3ceEVo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Aguafina Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/aguafinascript/v4/65g7cgMtMGnNlNyq_Z6CvMxLhO8OSNnfAp53LK1_iRs.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Akronim",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/akronim/v4/qA0L2CSArk3tuOWE1AR1DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Aladin",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/aladin/v4/PyuJ5cVHkduO0j5fAMKvAA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Aldrich",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/aldrich/v5/kMMW1S56gFx7RP_mW1g-Eg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Alef",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/alef/v3/ENvZ_P0HBDQxNZYCQO0lUA.ttf",
    "700": "http://fonts.gstatic.com/s/alef/v3/VDgZJhEwudtOzOFQpZ8MEA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Alegreya",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/alegreya/v5/62J3atXd6bvMU4qO_ca-eA.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/alegreya/v5/cbshnQGxwmlHBjUil7DaIfesZW2xOQ-xsNqO47m55DA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/alegreya/v5/5oZtdI5-wQwgAFrd9erCsaCWcynf_cDxXwCLxiixG1c.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/alegreya/v5/IWi8e5bpnqhMRsZKTcTUWgJKKGfqHaYFsRG-T3ceEVo.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/alegreya/v5/oQeMxX-vxGImzDgX6nxA7KCWcynf_cDxXwCLxiixG1c.ttf",
    "900italic": "http://themes.googleusercontent.com/static/fonts/alegreya/v5/-L71QLH_XqgYWaI1GbOVhp0EAVxt0G0biEntp43Qt6E.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Alegreya SC",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/alegreyasc/v5/3ozeFnTbygMK6PfHh8B-iqCWcynf_cDxXwCLxiixG1c.ttf",
    "italic": "http://fonts.gstatic.com/s/alegreyasc/v5/GOqmv3FLsJ2r6ZALMZVBmkeOrDcLawS7-ssYqLr2Xp4.ttf",
    "700": "http://fonts.gstatic.com/s/alegreyasc/v5/M9OIREoxDkvynwTpBAYUq3e1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "700italic": "http://fonts.gstatic.com/s/alegreyasc/v5/5PCoU7IUfCicpKBJtBmP6c_zJjSACmk0BRPxQqhnNLU.ttf",
    "900": "http://fonts.gstatic.com/s/alegreyasc/v5/M9OIREoxDkvynwTpBAYUqyenaqEuufTBk9XMKnKmgDA.ttf",
    "900italic": "http://fonts.gstatic.com/s/alegreyasc/v5/5PCoU7IUfCicpKBJtBmP6U_yTOUGsoC54csJe1b-IRw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Alegreya Sans",
   "category": "sans-serif",
   "variants": [
    "100",
    "100italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "500",
    "500italic",
    "700",
    "700italic",
    "800",
    "800italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "vietnamese"
   ],
   "version": "v2",
   "lastModified": "2014-07-10",
   "files": {
    "100": "http://fonts.gstatic.com/s/alegreyasans/v2/TKyx_-JJ6MdpQruNk-t-PJFGFO4uyVFMfB6LZsii7kI.ttf",
    "100italic": "http://fonts.gstatic.com/s/alegreyasans/v2/gRkSP2lBpqoMTVxg7DmVn2cDnjsrnI9_xJ-5gnBaHsE.ttf",
    "300": "http://fonts.gstatic.com/s/alegreyasans/v2/11EDm-lum6tskJMBbdy9acB1LjARzAvdqa1uQC32v70.ttf",
    "300italic": "http://fonts.gstatic.com/s/alegreyasans/v2/WfiXipsmjqRqsDBQ1bA9CnfqlVoxTUFFx1C8tBqmbcg.ttf",
    "regular": "http://fonts.gstatic.com/s/alegreyasans/v2/KYNzioYhDai7mTMnx_gDgn8f0n03UdmQgF_CLvNR2vg.ttf",
    "italic": "http://fonts.gstatic.com/s/alegreyasans/v2/TKyx_-JJ6MdpQruNk-t-PD4G9C9ttb0Oz5Cvf0qOitE.ttf",
    "500": "http://fonts.gstatic.com/s/alegreyasans/v2/11EDm-lum6tskJMBbdy9aQqQmZ7VjhwksfpNVG0pqGc.ttf",
    "500italic": "http://fonts.gstatic.com/s/alegreyasans/v2/WfiXipsmjqRqsDBQ1bA9Cs7DCVO6wo6i5LKIyZDzK40.ttf",
    "700": "http://fonts.gstatic.com/s/alegreyasans/v2/11EDm-lum6tskJMBbdy9aVCbmAUID8LN-q3pJpOk3Ys.ttf",
    "700italic": "http://fonts.gstatic.com/s/alegreyasans/v2/WfiXipsmjqRqsDBQ1bA9CpF66r9C4AnxxlBlGd7xY4g.ttf",
    "800": "http://fonts.gstatic.com/s/alegreyasans/v2/11EDm-lum6tskJMBbdy9acxnD5BewVtRRHHljCwR2bM.ttf",
    "800italic": "http://fonts.gstatic.com/s/alegreyasans/v2/WfiXipsmjqRqsDBQ1bA9CicOAJ_9MkLPbDmrtXDPbIU.ttf",
    "900": "http://fonts.gstatic.com/s/alegreyasans/v2/11EDm-lum6tskJMBbdy9aW42xlVP-j5dagE7-AU2zwg.ttf",
    "900italic": "http://fonts.gstatic.com/s/alegreyasans/v2/WfiXipsmjqRqsDBQ1bA9ChRaDUI9aE8-k7PrIG2iiuo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Alegreya Sans SC",
   "category": "sans-serif",
   "variants": [
    "100",
    "100italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "500",
    "500italic",
    "700",
    "700italic",
    "800",
    "800italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "vietnamese"
   ],
   "version": "v2",
   "lastModified": "2014-07-10",
   "files": {
    "100": "http://fonts.gstatic.com/s/alegreyasanssc/v2/trwFkDJLOJf6hqM93944kVnzStfdnFU-MXbO84aBs_M.ttf",
    "100italic": "http://fonts.gstatic.com/s/alegreyasanssc/v2/qG3gA9iy5RpXMH4crZboqqakMVR0XlJhO7VdJ8yYvA4.ttf",
    "300": "http://fonts.gstatic.com/s/alegreyasanssc/v2/AjAmkoP1y0Vaad0UPPR46-1IqtfxJspFjzJp0SaQRcI.ttf",
    "300italic": "http://fonts.gstatic.com/s/alegreyasanssc/v2/0VweK-TO3aQgazdxg8fs0CnTKaH808trtzttbEg4yVA.ttf",
    "regular": "http://fonts.gstatic.com/s/alegreyasanssc/v2/6kgb6ZvOagoVIRZyl8XV-EklWX-XdLVn1WTiuGuvKIU.ttf",
    "italic": "http://fonts.gstatic.com/s/alegreyasanssc/v2/trwFkDJLOJf6hqM93944kTfqo69HNOlCNZvbwAmUtiA.ttf",
    "500": "http://fonts.gstatic.com/s/alegreyasanssc/v2/AjAmkoP1y0Vaad0UPPR46_hHTluI57wqxl55RvSYo3s.ttf",
    "500italic": "http://fonts.gstatic.com/s/alegreyasanssc/v2/0VweK-TO3aQgazdxg8fs0NqVvxKdFVwqwzilqfVd39U.ttf",
    "700": "http://fonts.gstatic.com/s/alegreyasanssc/v2/AjAmkoP1y0Vaad0UPPR4600aId5t1FC-xZ8nmpa_XLk.ttf",
    "700italic": "http://fonts.gstatic.com/s/alegreyasanssc/v2/0VweK-TO3aQgazdxg8fs0IBYn3VD6xMEnodOh8pnFw4.ttf",
    "800": "http://fonts.gstatic.com/s/alegreyasanssc/v2/AjAmkoP1y0Vaad0UPPR46wQgSHD3Lo1Mif2Wkk5swWA.ttf",
    "800italic": "http://fonts.gstatic.com/s/alegreyasanssc/v2/0VweK-TO3aQgazdxg8fs0HStmCm6Rs90XeztCALm0H8.ttf",
    "900": "http://fonts.gstatic.com/s/alegreyasanssc/v2/AjAmkoP1y0Vaad0UPPR461Rf9EWUSEX_PR1d_gLKfpM.ttf",
    "900italic": "http://fonts.gstatic.com/s/alegreyasanssc/v2/0VweK-TO3aQgazdxg8fs0IvtwEfTCJoOJugANj-jWDI.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Alex Brush",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/alexbrush/v5/ooh3KJFbKJSUoIRWfiu8o_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Alfa Slab One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/alfaslabone/v4/Qx6FPcitRwTC_k88tLPc-Yjjx0o0jr6fNXxPgYh_a8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Alice",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/alice/v6/wZTAfivekBqIg-rk63nFvQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Alike",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/alike/v6/Ho8YpRKNk_202fwDiGNIyw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Alike Angular",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/alikeangular/v5/OpeCu4xxI3qO1C7CZcJtPT3XH2uEnVI__ynTBvNyki8.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Allan",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/allan/v6/T3lemhgZmLQkQI2Qc2bQHA.ttf",
    "700": "http://fonts.gstatic.com/s/allan/v6/zSxQiwo7wgnr7KkMXhSiag.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Allerta",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/allerta/v5/s9FOEuiJFTNbMe06ifzV8g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Allerta Stencil",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/allertastencil/v6/CdSZfRtHbQrBohqmzSdDYFf2eT4jUldwg_9fgfY_tHc.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Allura",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/allura/v3/4hcqgZanyuJ2gMYWffIR6A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Almendra",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/almendra/v7/PDpbB-ZF7deXAAEYPkQOeg.ttf",
    "italic": "http://fonts.gstatic.com/s/almendra/v7/CNWLyiDucqVKVgr4EMidi_esZW2xOQ-xsNqO47m55DA.ttf",
    "700": "http://fonts.gstatic.com/s/almendra/v7/ZpLdQMj7Q2AFio4nNO6A76CWcynf_cDxXwCLxiixG1c.ttf",
    "700italic": "http://fonts.gstatic.com/s/almendra/v7/-tXHKMcnn6FqrhJV3l1e3QJKKGfqHaYFsRG-T3ceEVo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Almendra Display",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/almendradisplay/v5/2Zuu97WJ_ez-87yz5Ai8fF6uyC_qD11hrFQ6EGgTJWI.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Almendra SC",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/almendrasc/v5/IuiLd8Fm9I6raSalxMoWeaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Amarante",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/amarante/v3/2dQHjIBWSpydit5zkJZnOw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Amaranth",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/amaranth/v4/7VcBog22JBHsHXHdnnycTA.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/amaranth/v4/UrJlRY9LcVERJSvggsdBqPesZW2xOQ-xsNqO47m55DA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/amaranth/v4/j5OFHqadfxyLnQRxFeox6qCWcynf_cDxXwCLxiixG1c.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/amaranth/v4/BHyuYFj9nqLFNvOvGh0xTwJKKGfqHaYFsRG-T3ceEVo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Amatic SC",
   "category": "handwriting",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/amaticsc/v4/MldbRWLFytvqxU1y81xSVg.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/amaticsc/v4/IDnkRTPGcrSVo50UyYNK7y3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Amethysta",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/amethysta/v3/1jEo9tOFIJDolAUpBnWbnA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Anaheim",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/anaheim/v3/t-z8aXHMpgI2gjN_rIflKA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Andada",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/andada/v6/rSFaDqNNQBRw3y19MB5Y4w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Andika",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/andika/v4/oe-ag1G0lcqZ3IXfeEgaGg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Angkor",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/angkor/v7/DLpLgIS-8F10ecwKqCm95Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Annie Use Your Telescope",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/annieuseyourtelescope/v5/2cuiO5VmaR09C8SLGEQjGqbp7mtG8sPlcZvOaO8HBak.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Anonymous Pro",
   "category": "monospace",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/anonymouspro/v5/Zhfjj_gat3waL4JSju74E-V_5zh5b-_HiooIRUBwn1A.ttf",
    "italic": "http://fonts.gstatic.com/s/anonymouspro/v5/q0u6LFHwttnT_69euiDbWKwIsuKDCXG0NQm7BvAgx-c.ttf",
    "700": "http://fonts.gstatic.com/s/anonymouspro/v5/WDf5lZYgdmmKhO8E1AQud--Cz_5MeePnXDAcLNWyBME.ttf",
    "700italic": "http://fonts.gstatic.com/s/anonymouspro/v5/_fVr_XGln-cetWSUc-JpfA1LL9bfs7wyIp6F8OC9RxA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Antic",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/antic/v6/hEa8XCNM7tXGzD0Uk0AipA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Antic Didone",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/anticdidone/v3/r3nJcTDuOluOL6LGDV1vRy3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Antic Slab",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/anticslab/v2/PSbJCTKkAS7skPdkd7AKEvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Anton",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/anton/v4/XIbCenm-W0IRHWYIh7CGUQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Arapey",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/arapey/v4/dqu823lrSYn8T2gApTdslA.ttf",
    "italic": "http://fonts.gstatic.com/s/arapey/v4/pY-Xi5JNBpaWxy2tZhEm5A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Arbutus",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/arbutus/v4/Go_hurxoUsn5MnqNVQgodQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Arbutus Slab",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/arbutusslab/v3/6k3Yp6iS9l4jRIpynA8qMy3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Architects Daughter",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/architectsdaughter/v4/RXTgOOQ9AAtaVOHxx0IUBMCy0EhZjHzu-y0e6uLf4Fg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Archivo Black",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/archivoblack/v2/WoAoVT7K3k7hHfxKbvB6B51XQG8isOYYJhPIYAyrESQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Archivo Narrow",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/archivonarrow/v3/DsLzC9scoPnrGiwYYMQXppTvAuddT2xDMbdz0mdLyZY.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/archivonarrow/v3/vqsrtPCpTU3tJlKfuXP5zUpmlyBQEFfdE6dERLXdQGQ.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/archivonarrow/v3/M__Wu4PAmHf4YZvQM8tWsMLtdzs3iyjn_YuT226ZsLU.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/archivonarrow/v3/wG6O733y5zHl4EKCOh8rSTg5KB8MNJ4uPAETq9naQO8.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Arimo",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "vietnamese",
    "cyrillic"
   ],
   "version": "v6",
   "lastModified": "2014-07-14",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/arimo/v6/Gpeo80g-5ji2CcyXWnzh7g.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/arimo/v6/_OdGbnX2-qQ96C4OjhyuPw.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/arimo/v6/ZItXugREyvV9LnbY_gxAmw.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/arimo/v6/__nOLWqmeXdhfr0g7GaFePesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Arizonia",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/arizonia/v5/yzJqkHZqryZBTM7RKYV9Wg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Armata",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/armata/v4/1H8FwGgIRrbYtxSfXhOHlQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Artifika",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/artifika/v5/Ekfp4H4QG7D-WsABDOyj8g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Arvo",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/arvo/v6/vvWPwz-PlZEwjOOIKqoZzA.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/arvo/v6/id5a4BCjbenl5Gkqonw_Rw.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/arvo/v6/OB3FDST7U38u3OjPK_vvRQ.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/arvo/v6/Hvl2MuWoXLaCy2v6MD4Yvw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Asap",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/asap/v2/2lf-1MDR8tsTpEtvJmr2hA.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/asap/v2/mwxNHf8QS8gNWCAMwkJNIg.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/asap/v2/o5RUA7SsJ80M8oDFBnrDbg.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/asap/v2/_rZz9y2oXc09jT5T6BexLQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Asset",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/asset/v5/hfPmqY-JzuR1lULlQf9iTg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Astloch",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/astloch/v5/fmbitVmHYLQP7MGPuFgpag.ttf",
    "700": "http://fonts.gstatic.com/s/astloch/v5/aPkhM2tL-tz1jX6aX2rvo_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Asul",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/asul/v4/9qpsNR_OOwyOYyo2N0IbBw.ttf",
    "700": "http://fonts.gstatic.com/s/asul/v4/uO8uNmxaq87-DdPmkEg5Gg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Atomic Age",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/atomicage/v5/WvBMe4FxANIKpo6Oi0mVJ_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Aubrey",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/aubrey/v7/zo9w8klO8bmOQIMajQ2aTA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Audiowide",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/audiowide/v2/yGcwRZB6VmoYhPUYT-mEow.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Autour One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/autourone/v3/2xmQBcg7FN72jaQRFZPIDvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Average",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/average/v3/aHUibBqdDbVYl5FM48pxyQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Average Sans",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/averagesans/v3/dnU3R-5A_43y5bIyLztPsS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Averia Gruesa Libre",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/averiagruesalibre/v3/10vbZTOoN6T8D-nvDzwRFyXcKHuZXlCN8VkWHpkUzKM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Averia Libre",
   "category": "display",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "300": "http://fonts.gstatic.com/s/averialibre/v3/r6hGL8sSLm4dTzOPXgx5XacQoVhARpoaILP7amxE_8g.ttf",
    "300italic": "http://fonts.gstatic.com/s/averialibre/v3/I6wAYuAvOgT7el2ePj2nkina0FLWfcB-J_SAYmcAXaI.ttf",
    "regular": "http://fonts.gstatic.com/s/averialibre/v3/rYVgHZZQICWnhjguGsBspC3USBnSvpkopQaUR-2r7iU.ttf",
    "italic": "http://fonts.gstatic.com/s/averialibre/v3/1etzuoNxVHR8F533EkD1WfMZXuCXbOrAvx5R0IT5Oyo.ttf",
    "700": "http://fonts.gstatic.com/s/averialibre/v3/r6hGL8sSLm4dTzOPXgx5XUD2ttfZwueP-QU272T9-k4.ttf",
    "700italic": "http://fonts.gstatic.com/s/averialibre/v3/I6wAYuAvOgT7el2ePj2nkvAs9-1nE9qOqhChW0m4nDE.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Averia Sans Libre",
   "category": "display",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "300": "http://fonts.gstatic.com/s/averiasanslibre/v3/_9-jTfQjaBsWAF_yp5z-V4CP_KG_g80s1KXiBtJHoNc.ttf",
    "300italic": "http://fonts.gstatic.com/s/averiasanslibre/v3/o7BEIK-fG3Ykc5Rzteh88YuyGu4JqttndUh4gRKxic0.ttf",
    "regular": "http://fonts.gstatic.com/s/averiasanslibre/v3/yRJpjT39KxACO9F31mj_LqV8_KRn4epKAjTFK1s1fsg.ttf",
    "italic": "http://fonts.gstatic.com/s/averiasanslibre/v3/COEzR_NPBSUOl3pFwPbPoCZU2HnUZT1xVKaIrHDioao.ttf",
    "700": "http://fonts.gstatic.com/s/averiasanslibre/v3/_9-jTfQjaBsWAF_yp5z-V8QwVOrz1y5GihpZmtKLhlI.ttf",
    "700italic": "http://fonts.gstatic.com/s/averiasanslibre/v3/o7BEIK-fG3Ykc5Rzteh88bXy1DXgmJcVtKjM5UWamMs.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Averia Serif Libre",
   "category": "display",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "300": "http://fonts.gstatic.com/s/averiaseriflibre/v4/yvITAdr5D1nlsdFswJAb8SmC4gFJ2PHmfdVKEd_5S9M.ttf",
    "300italic": "http://fonts.gstatic.com/s/averiaseriflibre/v4/YOLFXyye4sZt6AZk1QybCG2okl0bU63CauowU4iApig.ttf",
    "regular": "http://fonts.gstatic.com/s/averiaseriflibre/v4/fdtF30xa_Erw0zAzOoG4BZqY66i8AUyI16fGqw0iAew.ttf",
    "italic": "http://fonts.gstatic.com/s/averiaseriflibre/v4/o9qhvK9iT5iDWfyhQUe-6Ru_b0bTq5iipbJ9hhgHJ6U.ttf",
    "700": "http://fonts.gstatic.com/s/averiaseriflibre/v4/yvITAdr5D1nlsdFswJAb8Q50KV5TaOVolur4zV2iZsg.ttf",
    "700italic": "http://fonts.gstatic.com/s/averiaseriflibre/v4/YOLFXyye4sZt6AZk1QybCNxohRXP4tNDqG3X4Hqn21k.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bad Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "cyrillic"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/badscript/v4/cRyUs0nJ2eMQFHwBsZNRXfesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Balthazar",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/balthazar/v4/WgbaSIs6dJAGXJ0qbz2xlw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bangers",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/bangers/v5/WAffdge5w99Xif-DLeqmcA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Basic",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/basic/v4/hNII2mS5Dxw5C0u_m3mXgA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Battambang",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v8",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/battambang/v8/MzrUfQLefYum5vVGM3EZVPesZW2xOQ-xsNqO47m55DA.ttf",
    "700": "http://fonts.gstatic.com/s/battambang/v8/dezbRtMzfzAA99DmrCYRMgJKKGfqHaYFsRG-T3ceEVo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Baumans",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/baumans/v4/o0bFdPW1H5kd5saqqOcoVg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bayon",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/bayon/v7/yTubusjTnpNRZwA4_50iVw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Belgrano",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/belgrano/v5/iq8DUa2s7g6WRCeMiFrmtQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Belleza",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/belleza/v3/wchA3BWJlVqvIcSeNZyXew.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "BenchNine",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/benchnine/v2/ah9xtUy9wLQ3qnWa2p-piS3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/benchnine/v2/h3OAlYqU3aOeNkuXgH2Q2w.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/benchnine/v2/qZpi6ZVZg3L2RL_xoBLxWS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bentham",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/bentham/v5/5-Mo8Fe7yg5tzV0GlQIuzQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Berkshire Swash",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/berkshireswash/v3/4RZJjVRPjYnC2939hKCAimKfbtsIjCZP_edQljX9gR0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bevan",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/bevan/v5/Rtg3zDsCeQiaJ_Qno22OJA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bigelow Rules",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/bigelowrules/v3/FEJCPLwo07FS-6SK6Al50X8f0n03UdmQgF_CLvNR2vg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bigshot One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/bigshotone/v5/wSyZjBNTWDQHnvWE2jt6j6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bilbo",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/bilbo/v5/-ty-lPs5H7OIucWbnpFrkA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bilbo Swash Caps",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/bilboswashcaps/v6/UB_-crLvhx-PwGKW1oosDmYeFSdnSpRYv5h9gpdlD1g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bitter",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/bitter/v5/w_BNdJvVZDRmqy5aSfB2kQ.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/bitter/v5/TC0FZEVzXQIGgzmRfKPZbA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/bitter/v5/4dUtr_4BvHuoRU35suyOAg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Black Ops One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/blackopsone/v5/2XW-DmDsGbDLE372KrMW1Yjjx0o0jr6fNXxPgYh_a8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bokor",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/bokor/v7/uAKdo0A85WW23Gs6mcbw7A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bonbon",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/bonbon/v5/IW3u1yzG1knyW5oz0s9_6Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Boogaloo",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/boogaloo/v5/4Wu1tvFMoB80fSu8qLgQfQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bowlby One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/bowlbyone/v6/eKpHjHfjoxM2bX36YNucefesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bowlby One SC",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/bowlbyonesc/v7/8ZkeXftTuzKBtmxOYXoRedDkZCMxWJecxjvKm2f8MJw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Brawler",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/brawler/v5/3gfSw6imxQnQxweVITqUrg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bree Serif",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/breeserif/v3/5h9crBVIrvZqgf34FHcnEfesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bubblegum Sans",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/bubblegumsans/v4/Y9iTUUNz6lbl6TrvV4iwsytnKWgpfO2iSkLzTz-AABg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Bubbler One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/bubblerone/v3/e8S0qevkZAFaBybtt_SU4qCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Buda",
   "category": "display",
   "variants": [
    "300"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "300": "http://fonts.gstatic.com/s/buda/v5/hLtAmNUmEMJH2yx7NGUjnA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Buenard",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/buenard/v5/NSpMPGKAUgrLrlstYVvIXQ.ttf",
    "700": "http://fonts.gstatic.com/s/buenard/v5/yUlGE115dGr7O9w9FlP3UvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Butcherman",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/butcherman/v6/bxiJmD567sPBVpJsT0XR0vesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Butterfly Kids",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/butterflykids/v3/J4NTF5M25htqeTffYImtlUZaDk62iwTBnbnvwSjZciA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cabin",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "500",
    "500italic",
    "600",
    "600italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/cabin/v5/XeuAFYo2xAPHxZGBbQtHhA.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/cabin/v5/0tJ9k3DI5xC4GBgs1E_Jxw.ttf",
    "500": "http://themes.googleusercontent.com/static/fonts/cabin/v5/HgsCQ-k3_Z_uQ86aFolNBg.ttf",
    "500italic": "http://themes.googleusercontent.com/static/fonts/cabin/v5/50sjhrGE0njyO-7mGDhGP_esZW2xOQ-xsNqO47m55DA.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/cabin/v5/eUDAvKhBtmTCkeVBsFk34A.ttf",
    "600italic": "http://themes.googleusercontent.com/static/fonts/cabin/v5/sFQpQDBd3G2om0Nl5dD2CvesZW2xOQ-xsNqO47m55DA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/cabin/v5/4EKhProuY1hq_WCAomq9Dg.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/cabin/v5/K83QKi8MOKLEqj6bgZ7LrfesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cabin Condensed",
   "category": "sans-serif",
   "variants": [
    "regular",
    "500",
    "600",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/cabincondensed/v5/B0txb0blf2N29WdYPJjMSiQPsWWoiv__AzYJ9Zzn9II.ttf",
    "500": "http://themes.googleusercontent.com/static/fonts/cabincondensed/v5/Ez4zJbsGr2BgXcNUWBVgEARL_-ABKXdjsJSPT0lc2Bk.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/cabincondensed/v5/Ez4zJbsGr2BgXcNUWBVgELS5sSASxc8z4EQTQj7DCAI.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/cabincondensed/v5/Ez4zJbsGr2BgXcNUWBVgEMAWgzcA047xWLixhLCofl8.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cabin Sketch",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/cabinsketch/v7/d9fijO34zQajqQvl3YHRCS3USBnSvpkopQaUR-2r7iU.ttf",
    "700": "http://fonts.gstatic.com/s/cabinsketch/v7/ki3SSN5HMOO0-IOLOj069ED2ttfZwueP-QU272T9-k4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Caesar Dressing",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/caesardressing/v4/2T_WzBgE2Xz3FsyJMq34T9gR43u4FvCuJwIfF5Zxl6Y.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cagliostro",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/cagliostro/v4/i85oXbtdSatNEzss99bpj_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Calligraffitti",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/calligraffitti/v5/vLVN2Y-z65rVu1R7lWdvyDXz_orj3gX0_NzfmYulrko.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cambo",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/cambo/v4/PnwpRuTdkYCf8qk4ajmNRA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Candal",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/candal/v5/x44dDW28zK7GR1gGDBmj9g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cantarell",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/cantarell/v4/p5ydP_uWQ5lsFzcP_XVMEw.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/cantarell/v4/DTCLtOSqP-7dgM-V_xKUjqCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/cantarell/v4/Yir4ZDsCn4g1kWopdg-ehC3USBnSvpkopQaUR-2r7iU.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/cantarell/v4/weehrwMeZBXb0QyrWnRwFXe1Pd76Vl7zRpE7NLJQ7XU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cantata One",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/cantataone/v3/-a5FDvnBqaBMDaGgZYnEfqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cantora One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/cantoraone/v4/oI-DS62RbHI8ZREjp73ehqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Capriola",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/capriola/v3/JxXPlkdzWwF9Cwelbvi9jA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cardo",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700"
   ],
   "subsets": [
    "greek-ext",
    "greek",
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/cardo/v6/jbkF2_R0FKUEZTq5dwSknQ.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/cardo/v6/pcv4Np9tUkq0YREYUcEEJQ.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/cardo/v6/lQN30weILimrKvp8rZhF1w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Carme",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/carme/v5/08E0NP1eRBEyFRUadmMfgA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Carrois Gothic",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/carroisgothic/v3/GCgb7bssGpwp7V5ynxmWy2x3d0cwUleGuRTmCYfCUaM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Carrois Gothic SC",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/carroisgothicsc/v3/bVp4nhwFIXU-r3LqUR8DSJTdPW1ioadGi2uRiKgJVCY.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Carter One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/carterone/v7/5X_LFvdbcB7OBG7hBgZ7fPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Caudex",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "greek-ext",
    "greek",
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/caudex/v5/PWEexiHLDmQbn2b1OPZWfg.ttf",
    "italic": "http://fonts.gstatic.com/s/caudex/v5/XjMZF6XCisvV3qapD4oJdw.ttf",
    "700": "http://fonts.gstatic.com/s/caudex/v5/PetCI4GyQ5Q3LiOzUu_mMg.ttf",
    "700italic": "http://fonts.gstatic.com/s/caudex/v5/yT8YeHLjaJvQXlUEYOA8gqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cedarville Cursive",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/cedarvillecursive/v5/cuCe6HrkcqrWTWTUE7dw-41zwq9-z_Lf44CzRAA0d0Y.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ceviche One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/cevicheone/v5/WOaXIMBD4VYMy39MsobJhKCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Changa One",
   "category": "display",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/changaone/v7/dr4qjce4W3kxFrZRkVD87fesZW2xOQ-xsNqO47m55DA.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/changaone/v7/wJVQlUs1lAZel-WdTo2U9y3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Chango",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/chango/v4/3W3AeMMtRTH08t5qLOjBmg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Chau Philomene One",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/chauphilomeneone/v3/KKc5egCL-a2fFVoOA2x6tBFi5dxgSTdxqnMJgWkBJcg.ttf",
    "italic": "http://fonts.gstatic.com/s/chauphilomeneone/v3/eJj1PY_iN4KiIuyOvtMHJP6uyLkxyiC4WcYA74sfquE.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Chela One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/chelaone/v3/h5O0dEnpnIq6jQnWxZybrA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Chelsea Market",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/chelseamarket/v3/qSdzwh2A4BbNemy78sJLfAAI1i8fIftCBXsBF2v9UMI.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Chenla",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v8",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/chenla/v8/aLNpdAUDq2MZbWz2U1a16g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cherry Cream Soda",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/cherrycreamsoda/v4/OrD-AUnFcZeeKa6F_c0_WxOiHiuAPYA9ry3O1RG2XIU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cherry Swash",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/cherryswash/v3/HqOk7C7J1TZ5i3L-ejF0vi3USBnSvpkopQaUR-2r7iU.ttf",
    "700": "http://fonts.gstatic.com/s/cherryswash/v3/-CfyMyQqfucZPQNB0nvYyED2ttfZwueP-QU272T9-k4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Chewy",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/chewy/v5/hcDN5cvQdIu6Bx4mg_TSyw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Chicle",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/chicle/v4/xg4q57Ut9ZmyFwLp51JLgg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Chivo",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/chivo/v5/L88PEuzS9eRfHRZhAPhZyw.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/chivo/v5/Oe3-Q-a2kBzPnhHck_baMg.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/chivo/v5/JAdkiWd46QCW4vOsj3dzTA.ttf",
    "900italic": "http://themes.googleusercontent.com/static/fonts/chivo/v5/LoszYnE86q2wJEOjCigBQ_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cinzel",
   "category": "serif",
   "variants": [
    "regular",
    "700",
    "900"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/cinzel/v2/GF7dy_Nc-a6EaHYSyGd-EA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/cinzel/v2/nYcFQ6_3pf_6YDrOFjBR8Q.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/cinzel/v2/FTBj72ozM2cEOSxiVsRb3A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cinzel Decorative",
   "category": "display",
   "variants": [
    "regular",
    "700",
    "900"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/cinzeldecorative/v3/fmgK7oaJJIXAkhd9798yQgT5USbJx2F82lQbogPy2bY.ttf",
    "700": "http://fonts.gstatic.com/s/cinzeldecorative/v3/pXhIVnhFtL_B9Vb1wq2F95-YYVDmZkJErg0zgx9XuZI.ttf",
    "900": "http://fonts.gstatic.com/s/cinzeldecorative/v3/pXhIVnhFtL_B9Vb1wq2F97Khqbv0zQZa0g-9HOXAalU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Clicker Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/clickerscript/v3/Zupmk8XwADjufGxWB9KThBnpV0hQCek3EmWnCPrvGRM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Coda",
   "category": "display",
   "variants": [
    "regular",
    "800"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/coda/v8/yHDvulhg-P-p2KRgRrnUYw.ttf",
    "800": "http://themes.googleusercontent.com/static/fonts/coda/v8/6ZIw0sbALY0KTMWllZB3hQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Coda Caption",
   "category": "sans-serif",
   "variants": [
    "800"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-10",
   "files": {
    "800": "http://fonts.gstatic.com/s/codacaption/v7/YDl6urZh-DUFhiMBTgAnz_qsay_1ZmRGmC8pVRdIfAg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Codystar",
   "category": "display",
   "variants": [
    "300",
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "300": "http://fonts.gstatic.com/s/codystar/v3/EVaUzfJkcb8Zqx9kzQLXqqCWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "http://fonts.gstatic.com/s/codystar/v3/EN-CPFKYowSI7SuR7-0cZA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Combo",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/combo/v4/Nab98KjR3JZSSPGtzLyXNw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Comfortaa",
   "category": "display",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/comfortaa/v5/r_tUZNl0G8xCoOmp_JkSCi3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/comfortaa/v5/lZx6C1VViPgSOhCBUP7hXA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/comfortaa/v5/fND5XPYKrF2tQDwwfWZJIy3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Coming Soon",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/comingsoon/v4/Yz2z3IAe2HSQAOWsSG8COKCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Concert One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/concertone/v6/N5IWCIGhUNdPZn_efTxKN6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Condiment",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/condiment/v3/CstmdiPpgFSV0FUNL5LrJA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Content",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/content/v7/l8qaLjygvOkDEU2G6-cjfQ.ttf",
    "700": "http://fonts.gstatic.com/s/content/v7/7PivP8Zvs2qn6F6aNbSQe_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Contrail One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/contrailone/v5/b41KxjgiyqX-hkggANDU6C3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Convergence",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/convergence/v4/eykrGz1NN_YpQmkAZjW-qKCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cookie",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/cookie/v6/HxeUC62y_YdDbiFlze357A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Copse",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/copse/v4/wikLrtPGjZDvZ5w2i5HLWg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Corben",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/corben/v7/tTysMZkt-j8Y5yhkgsoajQ.ttf",
    "700": "http://fonts.gstatic.com/s/corben/v7/lirJaFSQWdGQuV--fksg5g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Courgette",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/courgette/v3/2YO0EYtyE9HUPLZprahpZA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cousine",
   "category": "monospace",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "vietnamese",
    "cyrillic"
   ],
   "version": "v8",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/cousine/v8/GYX4bPXObJNJo63QJEUnLg.ttf",
    "italic": "http://fonts.gstatic.com/s/cousine/v8/1WtIuajLoo8vjVwsrZ3eOg.ttf",
    "700": "http://fonts.gstatic.com/s/cousine/v8/FXEOnNUcCzhdtoBxiq-lovesZW2xOQ-xsNqO47m55DA.ttf",
    "700italic": "http://fonts.gstatic.com/s/cousine/v8/y_AZ5Sz-FwL1lux2xLSTZS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Coustard",
   "category": "serif",
   "variants": [
    "regular",
    "900"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/coustard/v5/iO2Rs5PmqAEAXoU3SkMVBg.ttf",
    "900": "http://fonts.gstatic.com/s/coustard/v5/W02OCWO6OfMUHz6aVyegQ6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Covered By Your Grace",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/coveredbyyourgrace/v4/6ozZp4BPlrbDRWPe3EBGA6CVUMdvnk-GcAiZQrX9Gek.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Crafty Girls",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/craftygirls/v3/0Sv8UWFFdhQmesHL32H8oy3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Creepster",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/creepster/v4/0vdr5kWJ6aJlOg5JvxnXzQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Crete Round",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/creteround/v3/B8EwN421qqOCCT8vOH4wJ6CWcynf_cDxXwCLxiixG1c.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/creteround/v3/5xAt7XK2vkUdjhGtt98unUeOrDcLawS7-ssYqLr2Xp4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Crimson Text",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "600",
    "600italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/crimsontext/v4/3IFMwfRa07i-auYR-B-zNS3USBnSvpkopQaUR-2r7iU.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/crimsontext/v4/a5QZnvmn5amyNI-t2BMkWPMZXuCXbOrAvx5R0IT5Oyo.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/crimsontext/v4/rEy5tGc5HdXy56Xvd4f3I2v8CylhIUtwUiYO7Z2wXbE.ttf",
    "600italic": "http://themes.googleusercontent.com/static/fonts/crimsontext/v4/4j4TR-EfnvCt43InYpUNDIR-5-urNOGAobhAyctHvW8.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/crimsontext/v4/rEy5tGc5HdXy56Xvd4f3I0D2ttfZwueP-QU272T9-k4.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/crimsontext/v4/4j4TR-EfnvCt43InYpUNDPAs9-1nE9qOqhChW0m4nDE.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Croissant One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/croissantone/v3/mPjsOObnC77fp1cvZlOfIYjjx0o0jr6fNXxPgYh_a8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Crushed",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/crushed/v5/aHwSejs3Kt0Lg95u7j32jA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cuprum",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/cuprum/v5/JgXs0F_UiaEdAS74msmFNg.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/cuprum/v5/cLEz0KV6OxInnktSzpk58g.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/cuprum/v5/6tl3_FkDeXSD72oEHuJh4w.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/cuprum/v5/bnkXaBfoYvaJ75axRPSwVKCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cutive",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/cutive/v6/G2bW-ImyOCwKxBkLyz39YQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Cutive Mono",
   "category": "monospace",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/cutivemono/v3/ncWQtFVKcSs8OW798v30k6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Damion",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/damion/v5/13XtECwKxhD_VrOqXL4SiA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Dancing Script",
   "category": "handwriting",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/dancingscript/v4/DK0eTGXiZjN6yA8zAEyM2RnpV0hQCek3EmWnCPrvGRM.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/dancingscript/v4/KGBfwabt0ZRLA5W1ywjowb_dAmXiKjTPGCuO6G2MbfA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Dangrek",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/dangrek/v7/LOaFhBT-EHNxZjV8DAW_ew.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Dawning of a New Day",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/dawningofanewday/v6/JiDsRhiKZt8uz3NJ5xA06gXLnohmOYWQZqo_sW8GLTk.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Days One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/daysone/v5/kzwZjNhc1iabMsrc_hKBIA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Delius",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/delius/v5/TQA163qafki2-gV-B6F_ag.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Delius Swash Caps",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/deliusswashcaps/v7/uXyrEUnoWApxIOICunRq7yIrxb5zDVgU2N3VzXm7zq4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Delius Unicase",
   "category": "handwriting",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/deliusunicase/v8/b2sKujV3Q48RV2PQ0k1vqu6rPKfVZo7L2bERcf0BDns.ttf",
    "700": "http://fonts.gstatic.com/s/deliusunicase/v8/7FTMTITcb4dxUp99FAdTqNy5weKXdcrx-wE0cgECMq8.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Della Respira",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/dellarespira/v3/F4E6Lo_IZ6L9AJCcbqtDVeDcg5akpSnIcsPhLOFv7l8.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Denk One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/denkone/v3/TdXOeA4eA_hEx4W8Sh9wPw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Devonshire",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/devonshire/v4/I3ct_2t12SYizP8ZC-KFi_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Didact Gothic",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/didactgothic/v6/v8_72sD3DYMKyM0dn3LtWotBLojGU5Qdl8-5NL4v70w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Diplomata",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/diplomata/v5/u-ByBiKgN6rTMA36H3kcKg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Diplomata SC",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/diplomatasc/v4/JdVwAwfE1a_pahXjk5qpNi3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Domine",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/domine/v2/wfVIgamVFjMNQAEWurCiHA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/domine/v2/phBcG1ZbQFxUIt18hPVxnw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Donegal One",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/donegalone/v3/6kN4-fDxz7T9s5U61HwfF6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Doppio One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/doppioone/v3/WHZ3HJQotpk_4aSMNBo_t_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Dorsa",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/dorsa/v6/wCc3cUe6XrmG2LQE6GlIrw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Dosis",
   "category": "sans-serif",
   "variants": [
    "200",
    "300",
    "regular",
    "500",
    "600",
    "700",
    "800"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "200": "http://themes.googleusercontent.com/static/fonts/dosis/v2/ztftab0r6hcd7AeurUGrSQ.ttf",
    "300": "http://themes.googleusercontent.com/static/fonts/dosis/v2/awIB6L0h5mb0plIKorXmuA.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/dosis/v2/rJRlixu-w0JZ1MyhJpao_Q.ttf",
    "500": "http://themes.googleusercontent.com/static/fonts/dosis/v2/ruEXDOFMxDPGnjCBKRqdAQ.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/dosis/v2/KNAswRNwm3tfONddYyidxg.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/dosis/v2/AEEAj0ONidK8NQQMBBlSig.ttf",
    "800": "http://themes.googleusercontent.com/static/fonts/dosis/v2/nlrKd8E69vvUU39XGsvR7Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Dr Sugiyama",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/drsugiyama/v4/S5Yx3MIckgoyHhhS4C9Tv6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Droid Sans",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/droidsans/v4/rS9BT6-asrfjpkcV3DXf__esZW2xOQ-xsNqO47m55DA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/droidsans/v4/EFpQQyG9GqCrobXxL-KRMQJKKGfqHaYFsRG-T3ceEVo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Droid Sans Mono",
   "category": "monospace",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-03-18",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/droidsansmono/v5/ns-m2xQYezAtqh7ai59hJcwD6PD0c3_abh9zHKQtbGU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Droid Serif",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/droidserif/v4/DgAtPy6rIVa2Zx3Xh9KaNaCWcynf_cDxXwCLxiixG1c.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/droidserif/v4/cj2hUnSRBhwmSPr9kS5890eOrDcLawS7-ssYqLr2Xp4.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/droidserif/v4/QQt14e8dY39u-eYBZmppwXe1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/droidserif/v4/c92rD_x0V1LslSFt3-QEps_zJjSACmk0BRPxQqhnNLU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Duru Sans",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-08",
   "files": {
    "regular": "http://fonts.gstatic.com/s/durusans/v5/R1xHvAOARPh8_so9_UKw1w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Dynalight",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/dynalight/v4/-CWsIe8OUDWTIHjSAh41kA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "EB Garamond",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin",
    "latin-ext",
    "vietnamese",
    "cyrillic"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/ebgaramond/v5/CDR0kuiFK7I1OZ2hSdR7G6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Eagle Lake",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/eaglelake/v3/ZKlYin7caemhx9eSg6RvPfesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Eater",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/eater/v4/gm6f3OmYEdbs3lPQtUfBkA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Economica",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/economica/v2/G4rJRujzZbq9Nxngu9l3hg.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/economica/v2/p5O9AVeUqx_n35xQRinNYaCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/economica/v2/UK4l2VEpwjv3gdcwbwXE9C3USBnSvpkopQaUR-2r7iU.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/economica/v2/ac5dlUsedQ03RqGOeay-3Xe1Pd76Vl7zRpE7NLJQ7XU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ek Mukta",
   "category": "sans-serif",
   "variants": [
    "200",
    "300",
    "regular",
    "500",
    "600",
    "700",
    "800"
   ],
   "subsets": [
    "devanagari",
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-17",
   "files": {
    "200": "http://themes.googleusercontent.com/static/fonts/ekmukta/v4/crtkNHh5JcM3VJKG0E-B36CWcynf_cDxXwCLxiixG1c.ttf",
    "300": "http://themes.googleusercontent.com/static/fonts/ekmukta/v4/mpaAv7CIyk0VnZlqSneVxKCWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/ekmukta/v4/aFcjXdC5jyJ1p8w54wIIrg.ttf",
    "500": "http://themes.googleusercontent.com/static/fonts/ekmukta/v4/PZ1y2MstFczWvBlFSgzMyaCWcynf_cDxXwCLxiixG1c.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/ekmukta/v4/Z5Mfzeu6M3emakcJO2QeTqCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/ekmukta/v4/4ugcOGR28Jn-oBIn0-qLYaCWcynf_cDxXwCLxiixG1c.ttf",
    "800": "http://themes.googleusercontent.com/static/fonts/ekmukta/v4/O68TH5OjEhVmn9_gIrcfS6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Electrolize",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/electrolize/v4/yFVu5iokC-nt4B1Cyfxb9aCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Elsie",
   "category": "display",
   "variants": [
    "regular",
    "900"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-06-18",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/elsie/v2/gwspePauE45BJu6Ok1QrfQ.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/elsie/v2/1t-9f0N2NFYwAgN7oaISqg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Elsie Swash Caps",
   "category": "display",
   "variants": [
    "regular",
    "900"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/elsieswashcaps/v3/9L3hIJMPCf6sxCltnxd6X2YeFSdnSpRYv5h9gpdlD1g.ttf",
    "900": "http://fonts.gstatic.com/s/elsieswashcaps/v3/iZnus9qif0tR5pGaDv5zdKoKBWBozTtxi30NfZDOXXU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Emblema One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/emblemaone/v4/7IlBUjBWPIiw7cr_O2IfSaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Emilys Candy",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/emilyscandy/v3/PofLVm6v1SwZGOzC8s-I3S3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Engagement",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/engagement/v4/4Uz0Jii7oVPcaFRYmbpU6vesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Englebert",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/englebert/v3/sll38iOvOuarDTYBchlP3Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Enriqueta",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/enriqueta/v3/_p90TrIwR1SC-vDKtmrv6A.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/enriqueta/v3/I27Pb-wEGH2ajLYP0QrtSC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Erica One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/ericaone/v5/cIBnH2VAqQMIGYAcE4ufvQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Esteban",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/esteban/v3/ESyhLgqDDyK5JcFPp2svDw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Euphoria Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/euphoriascript/v3/c4XB4Iijj_NvSsCF4I0O2MxLhO8OSNnfAp53LK1_iRs.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ewert",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/ewert/v3/Em8hrzuzSbfHcTVqMjbAQg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Exo",
   "category": "sans-serif",
   "variants": [
    "100",
    "100italic",
    "200",
    "200italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "500",
    "500italic",
    "600",
    "600italic",
    "700",
    "700italic",
    "800",
    "800italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "100": "http://themes.googleusercontent.com/static/fonts/exo/v2/RI7A9uwjRmPbVp0n8e-Jvg.ttf",
    "100italic": "http://themes.googleusercontent.com/static/fonts/exo/v2/qtGyZZlWb2EEvby3ZPosxw.ttf",
    "200": "http://themes.googleusercontent.com/static/fonts/exo/v2/F8OfC_swrRRxpFt-tlXZQg.ttf",
    "200italic": "http://themes.googleusercontent.com/static/fonts/exo/v2/fr4HBfXHYiIngW2_bhlgRw.ttf",
    "300": "http://themes.googleusercontent.com/static/fonts/exo/v2/SBrN7TKUqgGUvfxqHqsnNw.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/exo/v2/3gmiLjBegIfcDLISjTGA1g.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/exo/v2/eUEzTFueNXRVhbt4PEB8kQ.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/exo/v2/cfgolWisMSURhpQeVHl_NA.ttf",
    "500": "http://themes.googleusercontent.com/static/fonts/exo/v2/jCg6DmGGXt_OVyp5ofQHPw.ttf",
    "500italic": "http://themes.googleusercontent.com/static/fonts/exo/v2/lo5eTdCNJZQVN08p8RnzAQ.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/exo/v2/q_SG5kXUmOcIvFpgtdZnlw.ttf",
    "600italic": "http://themes.googleusercontent.com/static/fonts/exo/v2/0cExa8K_pxS2lTuMr68XUA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/exo/v2/3_jwsL4v9uHjl5Q37G57mw.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/exo/v2/0me55yJIxd5vyQ9bF7SsiA.ttf",
    "800": "http://themes.googleusercontent.com/static/fonts/exo/v2/yLPuxBuV0lzqibRJyooOJg.ttf",
    "800italic": "http://themes.googleusercontent.com/static/fonts/exo/v2/n3LejeKVj_8gtZq5fIgNYw.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/exo/v2/97d0nd6Yv4-SA_X92xAuZA.ttf",
    "900italic": "http://themes.googleusercontent.com/static/fonts/exo/v2/JHTkQVhzyLtkY13Ye95TJQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Exo 2",
   "category": "sans-serif",
   "variants": [
    "100",
    "100italic",
    "200",
    "200italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "500",
    "500italic",
    "600",
    "600italic",
    "700",
    "700italic",
    "800",
    "800italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v1",
   "lastModified": "2013-12-05",
   "files": {
    "100": "http://themes.googleusercontent.com/static/fonts/exo2/v1/oVOtQy53isv97g4UhBUDqg.ttf",
    "100italic": "http://themes.googleusercontent.com/static/fonts/exo2/v1/LNYVgsJcaCxoKFHmd4AZcg.ttf",
    "200": "http://themes.googleusercontent.com/static/fonts/exo2/v1/qa-Ci2pBwJdCxciE1ErifQ.ttf",
    "200italic": "http://themes.googleusercontent.com/static/fonts/exo2/v1/DCrVxDVvS69n50O-5erZVvesZW2xOQ-xsNqO47m55DA.ttf",
    "300": "http://themes.googleusercontent.com/static/fonts/exo2/v1/nLUBdz_lHHoVIPor05Byhw.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/exo2/v1/iSy9VTeUTiqiurQg2ywtu_esZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/exo2/v1/Pf_kZuIH5c5WKVkQUaeSWQ.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/exo2/v1/xxA5ZscX9sTU6U0lZJUlYA.ttf",
    "500": "http://themes.googleusercontent.com/static/fonts/exo2/v1/oM0rzUuPqVJpW-VEIpuW5w.ttf",
    "500italic": "http://themes.googleusercontent.com/static/fonts/exo2/v1/amzRVCB-gipwdihZZ2LtT_esZW2xOQ-xsNqO47m55DA.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/exo2/v1/YnSn3HsyvyI1feGSdRMYqA.ttf",
    "600italic": "http://themes.googleusercontent.com/static/fonts/exo2/v1/Vmo58BiptGwfVFb0teU5gPesZW2xOQ-xsNqO47m55DA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/exo2/v1/2DiK4XkdTckfTk6we73-bQ.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/exo2/v1/Sdo-zW-4_--pDkTg6bYrY_esZW2xOQ-xsNqO47m55DA.ttf",
    "800": "http://themes.googleusercontent.com/static/fonts/exo2/v1/IVYl_7dJruOg8zKRpC8Hrw.ttf",
    "800italic": "http://themes.googleusercontent.com/static/fonts/exo2/v1/p0TA6KeOz1o4rySEbvUxI_esZW2xOQ-xsNqO47m55DA.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/exo2/v1/e8csG8Wnu87AF6uCndkFRQ.ttf",
    "900italic": "http://themes.googleusercontent.com/static/fonts/exo2/v1/KPhsGCoT2-7Uj6pMlRscH_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Expletus Sans",
   "category": "display",
   "variants": [
    "regular",
    "italic",
    "500",
    "500italic",
    "600",
    "600italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/expletussans/v6/gegTSDBDs5le3g6uxU1ZsX8f0n03UdmQgF_CLvNR2vg.ttf",
    "italic": "http://fonts.gstatic.com/s/expletussans/v6/Y-erXmY0b6DU_i2Qu0hTJj4G9C9ttb0Oz5Cvf0qOitE.ttf",
    "500": "http://fonts.gstatic.com/s/expletussans/v6/cl6rhMY77Ilk8lB_uYRRwAqQmZ7VjhwksfpNVG0pqGc.ttf",
    "500italic": "http://fonts.gstatic.com/s/expletussans/v6/sRBNtc46w65uJE451UYmW87DCVO6wo6i5LKIyZDzK40.ttf",
    "600": "http://fonts.gstatic.com/s/expletussans/v6/cl6rhMY77Ilk8lB_uYRRwCvj1tU7IJMS3CS9kCx2B3U.ttf",
    "600italic": "http://fonts.gstatic.com/s/expletussans/v6/sRBNtc46w65uJE451UYmW8yKH23ZS6zCKOFHG0e_4JE.ttf",
    "700": "http://fonts.gstatic.com/s/expletussans/v6/cl6rhMY77Ilk8lB_uYRRwFCbmAUID8LN-q3pJpOk3Ys.ttf",
    "700italic": "http://fonts.gstatic.com/s/expletussans/v6/sRBNtc46w65uJE451UYmW5F66r9C4AnxxlBlGd7xY4g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fanwood Text",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/fanwoodtext/v5/hDNDHUlsSb8bgnEmDp4T_i3USBnSvpkopQaUR-2r7iU.ttf",
    "italic": "http://fonts.gstatic.com/s/fanwoodtext/v5/0J3SBbkMZqBV-3iGxs5E9_MZXuCXbOrAvx5R0IT5Oyo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fascinate",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/fascinate/v4/ZE0637WWkBPKt1AmFaqD3Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fascinate Inline",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/fascinateinline/v5/lRguYfMfWArflkm5aOQ5QJmp8DTZ6iHear7UV05iykg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Faster One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/fasterone/v4/YxTOW2sf56uxD1T7byP5K_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fasthand",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/fasthand/v6/6XAagHH_KmpZL67wTvsETQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fauna One",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/faunaone/v3/8kL-wpAPofcAMELI_5NRnQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Federant",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/federant/v6/tddZFSiGvxICNOGra0i5aA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Federo",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/federo/v7/JPhe1S2tujeyaR79gXBLeQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Felipa",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/felipa/v3/SeyfyFZY7abAQXGrOIYnYg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fenix",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/fenix/v3/Ak8wR3VSlAN7VN_eMeJj7Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Finger Paint",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/fingerpaint/v3/m_ZRbiY-aPb13R3DWPBGXy3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fira Mono",
   "category": "monospace",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "vietnamese",
    "cyrillic"
   ],
   "version": "v1",
   "lastModified": "2014-06-02",
   "files": {
    "regular": "http://fonts.gstatic.com/s/firamono/v1/WQOm1D4RO-yvA9q9trJc8g.ttf",
    "700": "http://fonts.gstatic.com/s/firamono/v1/l24Wph3FsyKAbJ8dfExTZy3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fira Sans",
   "category": "sans-serif",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic",
    "500",
    "500italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v2",
   "lastModified": "2014-06-19",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/firasans/v2/VTBnrK42EiOBncVyQXZ7jy3USBnSvpkopQaUR-2r7iU.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/firasans/v2/6s0YCA9oCTF6hM60YM-qTS9-WlPSxbfiI49GsXo3q0g.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/firasans/v2/nsT0isDy56OkSX99sFQbXw.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/firasans/v2/cPT_2ddmoxsUuMtQqa8zGqCWcynf_cDxXwCLxiixG1c.ttf",
    "500": "http://themes.googleusercontent.com/static/fonts/firasans/v2/zM2u8V3CuPVwAAXFQcDi4C3USBnSvpkopQaUR-2r7iU.ttf",
    "500italic": "http://themes.googleusercontent.com/static/fonts/firasans/v2/6s0YCA9oCTF6hM60YM-qTcCNfqCYlB_eIx7H1TVXe60.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/firasans/v2/DugPdSljmOTocZOR2CItOi3USBnSvpkopQaUR-2r7iU.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/firasans/v2/6s0YCA9oCTF6hM60YM-qTXe1Pd76Vl7zRpE7NLJQ7XU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fjalla One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/fjallaone/v2/3b7vWCfOZsU53vMa8LWsf_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fjord One",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/fjordone/v4/R_YHK8au2uFPw5tNu5N7zw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Flamenco",
   "category": "display",
   "variants": [
    "300",
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "300": "http://fonts.gstatic.com/s/flamenco/v5/x9iI5CogvuZVCGoRHwXuo6CWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "http://fonts.gstatic.com/s/flamenco/v5/HC0ugfLLgt26I5_BWD1PZA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Flavors",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/flavors/v4/SPJi5QclATvon8ExcKGRvQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fondamento",
   "category": "handwriting",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/fondamento/v4/6LWXcjT1B7bnWluAOSNfMPesZW2xOQ-xsNqO47m55DA.ttf",
    "italic": "http://fonts.gstatic.com/s/fondamento/v4/y6TmwhSbZ8rYq7OTFyo7OS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fontdiner Swanky",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/fontdinerswanky/v5/8_GxIO5ixMtn5P6COsF3TlBjMPLzPAFJwRBn-s1U7kA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Forum",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/forum/v6/MZUpsq1VfLrqv8eSDcbrrQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Francois One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v7",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/francoisone/v7/bYbkq2nU2TSx4SwFbz5sCC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Freckle Face",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/freckleface/v3/7-B8j9BPJgazdHIGqPNv8y3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fredericka the Great",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/frederickathegreat/v4/7Es8Lxoku-e5eOZWpxw18nrnet6gXN1McwdQxS1dVrI.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fredoka One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/fredokaone/v2/QKfwXi-z-KtJAlnO2ethYqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Freehand",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/freehand/v7/uEBQxvA0lnn_BrD6krlxMw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fresca",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/fresca/v4/2q7Qm9sCo1tWvVgSDVWNIw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Frijole",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/frijole/v4/L2MfZse-2gCascuD-nLhWg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fruktur",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/fruktur/v5/PnQvfEi1LssAvhJsCwH__w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fugaz One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/fugazone/v5/5tteVDCwxsr8-5RuSiRWOw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "GFS Didot",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "greek"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/gfsdidot/v5/jQKxZy2RU-h9tkPZcRVluA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "GFS Neohellenic",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "greek"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/gfsneohellenic/v6/B4xRqbn-tANVqVgamMsSDiayCZa0z7CpFzlkqoCHztc.ttf",
    "italic": "http://fonts.gstatic.com/s/gfsneohellenic/v6/KnaWrO4awITAqigQIIYXKkCTdomiyJpIzPbEbIES3rU.ttf",
    "700": "http://fonts.gstatic.com/s/gfsneohellenic/v6/7HwjPQa7qNiOsnUce2h4448_BwCLZY3eDSV6kppAwI8.ttf",
    "700italic": "http://fonts.gstatic.com/s/gfsneohellenic/v6/FwWjoX6XqT-szJFyqsu_GYFF0fM4h-krcpQk7emtCpE.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gabriela",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/gabriela/v3/B-2ZfbAO3HDrxqV6lR5tdA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gafata",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/gafata/v4/aTFqlki_3Dc3geo-FxHTvQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Galdeano",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/galdeano/v5/ZKFMQI6HxEG1jOT0UGSZUg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Galindo",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/galindo/v3/2lafAS_ZEfB33OJryhXDUg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gentium Basic",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/gentiumbasic/v6/KCktj43blvLkhOTolFn-MYtBLojGU5Qdl8-5NL4v70w.ttf",
    "italic": "http://fonts.gstatic.com/s/gentiumbasic/v6/qoFz4NSMaYC2UmsMAG3lyTj3mvXnCeAk09uTtmkJGRc.ttf",
    "700": "http://fonts.gstatic.com/s/gentiumbasic/v6/2qL6yulgGf0wwgOp-UqGyLNuTeOOLg3nUymsEEGmdO0.ttf",
    "700italic": "http://fonts.gstatic.com/s/gentiumbasic/v6/8N9-c_aQDJ8LbI1NGVMrwtswO1vWwP9exiF8s0wqW10.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gentium Book Basic",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/gentiumbookbasic/v4/IRFxB2matTxrjZt6a3FUnrWDjKAyldGEr6eEi2MBNeY.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/gentiumbookbasic/v4/qHqW2lwKO8-uTfIkh8FsUfXfjMwrYnmPVsQth2IcAPY.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/gentiumbookbasic/v4/T2vUYmWzlqUtgLYdlemGnaWESMHIjnSjm9UUxYtEOko.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/gentiumbookbasic/v4/632u7TMIoFDWQYUaHFUp5PA2A9KyRZEkn4TZVuhsWRM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Geo",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/geo/v7/mJuJYk5Pww84B4uHAQ1XaA.ttf",
    "italic": "http://fonts.gstatic.com/s/geo/v7/8_r1wToF7nPdDuX1qxel6Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Geostar",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/geostar/v5/A8WQbhQbpYx3GWWaShJ9GA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Geostar Fill",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/geostarfill/v5/Y5ovXPPOHYTfQzK2aM-hui3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Germania One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/germaniaone/v3/3_6AyUql_-FbDi1e68jHdC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gilda Display",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/gildadisplay/v2/8yAVUZLLZ3wb7dSsjix0CADHmap7fRWINAsw8-RaxNg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Give You Glory",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/giveyouglory/v5/DFEWZFgGmfseyIdGRJAxuBwwkpSPZdvjnMtysdqprfI.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Glass Antiqua",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/glassantiqua/v3/0yLrXKplgdUDIMz5TnCHNODcg5akpSnIcsPhLOFv7l8.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Glegoo",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/glegoo/v3/2tf-h3n2A_SNYXEO0C8bKw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gloria Hallelujah",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/gloriahallelujah/v5/CA1k7SlXcY5kvI81M_R28Q3RdPdyebSUyJECJouPsvA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Goblin One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/goblinone/v5/331XtzoXgpVEvNTVcBJ_C_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gochi Hand",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/gochihand/v5/KT1-WxgHsittJ34_20IfAPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gorditas",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/gorditas/v3/uMgZhXUyH6qNGF3QsjQT5Q.ttf",
    "700": "http://fonts.gstatic.com/s/gorditas/v3/6-XCeknmxaon8AUqVkMnHaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Goudy Bookletter 1911",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/goudybookletter1911/v4/l5lwlGTN3pEY5Bf-rQEuIIjNDsyURsIKu4GSfvSE4mA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Graduate",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/graduate/v3/JpAmYLHqcIh9_Ff35HHwiA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Grand Hotel",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/grandhotel/v3/C_A8HiFZjXPpnMt38XnK7qCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gravitas One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/gravitasone/v5/nBHdBv6zVNU8MtP6w9FwTS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Great Vibes",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/greatvibes/v3/4Mi5RG_9LjQYrTU55GN_L6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Griffy",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/griffy/v3/vWkyYGBSyE5xjnShNtJtzw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gruppo",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/gruppo/v6/pS_JM0cK_piBZve-lfUq9w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gudea",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/gudea/v2/S-4QqBlkMPiiA3jNeCR5yw.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/gudea/v2/7mNgsGw_vfS-uUgRVXNDSw.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/gudea/v2/lsip4aiWhJ9bx172Y9FN_w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Habibi",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/habibi/v4/YYyqXF6pWpL7kmKgS_2iUA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Hammersmith One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/hammersmithone/v5/FWNn6ITYqL6or7ZTmBxRhjjVlsJB_M_Q_LtZxsoxvlw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Hanalei",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/hanalei/v5/Sx8vVMBnXSQyK6Cn0CBJ3A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Hanalei Fill",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/hanaleifill/v4/5uPeWLnaDdtm4UBG26Ds6C3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Handlee",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/handlee/v3/6OfkXkyC0E5NZN80ED8u3A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Hanuman",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/hanuman/v7/hRhwOGGmElJSl6KSPvEnOQ.ttf",
    "700": "http://fonts.gstatic.com/s/hanuman/v7/lzzXZ2l84x88giDrbfq76vesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Happy Monkey",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/happymonkey/v4/c2o0ps8nkBmaOYctqBq1rS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Headland One",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/headlandone/v3/iGmBeOvQGfq9DSbjJ8jDVy3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Henny Penny",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/hennypenny/v3/XRgo3ogXyi3tpsFfjImRF6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Herr Von Muellerhoff",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/herrvonmuellerhoff/v5/mmy24EUmk4tjm4gAEjUd7NLGIYrUsBdh-JWHYgiDiMU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Hind",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "500",
    "600",
    "700"
   ],
   "subsets": [
    "devanagari",
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-07-17",
   "files": {
    "300": "http://fonts.gstatic.com/s/hind/v2/qa346Adgv9kPDXoD1my4kA.ttf",
    "regular": "http://fonts.gstatic.com/s/hind/v2/mktFHh5Z5P9YjGKSslSUtA.ttf",
    "500": "http://fonts.gstatic.com/s/hind/v2/2cs8RCVcYtiv4iNDH1UsQQ.ttf",
    "600": "http://fonts.gstatic.com/s/hind/v2/TUKUmFMXSoxloBP1ni08oA.ttf",
    "700": "http://fonts.gstatic.com/s/hind/v2/cXJJavLdUbCfjxlsA6DqTw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Holtwood One SC",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/holtwoodonesc/v6/sToOq3cIxbfnhbEkgYNuBbAgSRh1LpJXlLfl8IbsmHg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Homemade Apple",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/homemadeapple/v5/yg3UMEsefgZ8IHz_ryz86BiPOmFWYV1WlrJkRafc4c0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Homenaje",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/homenaje/v4/v0YBU0iBRrGdVjDNQILxtA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell DW Pica",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/imfelldwpica/v5/W81bfaWiUicLSPbJhW-ATsA5qm663gJGVdtpamafG5A.ttf",
    "italic": "http://fonts.gstatic.com/s/imfelldwpica/v5/alQJ8SK5aSOZVaelYoyT4PL2asmh5DlYQYCosKo6yQs.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell DW Pica SC",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/imfelldwpicasc/v5/xBKKJV4z2KsrtQnmjGO17JZ9RBdEL0H9o5qzT1Rtof4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell Double Pica",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/imfelldoublepica/v5/yN1wY_01BkQnO0LYAhXdUol14jEdVOhEmvtCMCVwYak.ttf",
    "italic": "http://fonts.gstatic.com/s/imfelldoublepica/v5/64odUh2hAw8D9dkFKTlWYq0AWwkgdQfsRHec8TYi4mI.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell Double Pica SC",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/imfelldoublepicasc/v5/jkrUtrLFpMw4ZazhfkKsGwc4LoC4OJUqLw9omnT3VOU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell English",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/imfellenglish/v5/xwIisCqGFi8pff-oa9uSVHGNmx1fDm-u2eBJHQkdrmk.ttf",
    "italic": "http://fonts.gstatic.com/s/imfellenglish/v5/Z3cnIAI_L3XTRfz4JuZKbuewladMPCWTthtMv9cPS-c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell English SC",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/imfellenglishsc/v5/h3Tn6yWfw4b5qaLD1RWvz5ATixNthKRRR1XVH3rJNiw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell French Canon",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/imfellfrenchcanon/v5/iKB0WL1BagSpNPz3NLMdsJ3V2FNpBrlLSvqUnERhBP8.ttf",
    "italic": "http://fonts.gstatic.com/s/imfellfrenchcanon/v5/owCuNQkLLFW7TBBPJbMnhRa-QL94KdW80H29tcyld2A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell French Canon SC",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/imfellfrenchcanonsc/v5/kA3bS19-tQbeT_iG32EZmaiyyzHwYrAbmNulTz423iM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell Great Primer",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/imfellgreatprimer/v5/AL8ALGNthei20f9Cu3e93rgeX3ROgtTz44CitKAxzKI.ttf",
    "italic": "http://fonts.gstatic.com/s/imfellgreatprimer/v5/1a-artkXMVg682r7TTxVY1_YG2SFv8Ma7CxRl1S3o7g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell Great Primer SC",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/imfellgreatprimersc/v5/A313vRj97hMMGFjt6rgSJtRg-ciw1Y27JeXb2Zv4lZQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Iceberg",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/iceberg/v3/p2XVm4M-N0AOEEOymFKC5w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Iceland",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/iceland/v4/kq3uTMGgvzWGNi39B_WxGA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Imprima",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/imprima/v3/eRjquWLjwLGnTEhLH7u3kA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Inconsolata",
   "category": "monospace",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v7",
   "lastModified": "2014-03-18",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/inconsolata/v7/7bMKuoy6Nh0ft0SHnIGMuaCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/inconsolata/v7/AIed271kqQlcIRSOnQH0yXe1Pd76Vl7zRpE7NLJQ7XU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Inder",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/inder/v4/C38TwecLTfKxIHDc_Adcrw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Indie Flower",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/indieflower/v5/10JVD_humAd5zP2yrFqw6i3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Inika",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/inika/v3/eZCrULQGaIxkrRoGz_DjhQ.ttf",
    "700": "http://fonts.gstatic.com/s/inika/v3/bl3ZoTyrWsFun2zYbsgJrA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Irish Grover",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/irishgrover/v5/kUp7uUPooL-KsLGzeVJbBC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Istok Web",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v6",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/istokweb/v6/RYLSjEXQ0nNtLLc4n7--dQ.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/istokweb/v6/kvcT2SlTjmGbC3YlZxmrl6CWcynf_cDxXwCLxiixG1c.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/istokweb/v6/2koEo4AKFSvK4B52O_Mwai3USBnSvpkopQaUR-2r7iU.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/istokweb/v6/ycQ3g52ELrh3o_HYCNNUw3e1Pd76Vl7zRpE7NLJQ7XU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Italiana",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/italiana/v3/dt95fkCSTOF-c6QNjwSycA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Italianno",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/italianno/v5/HsyHnLpKf8uP7aMpDQHZmg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Jacques Francois",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/jacquesfrancois/v3/_-0XWPQIW6tOzTHg4KaJ_M13D_4KM32Q4UmTSjpuNGQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Jacques Francois Shadow",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/jacquesfrancoisshadow/v3/V14y0H3vq56fY9SV4OL_FASt0D_oLVawA8L8b9iKjbs.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Jim Nightshade",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/jimnightshade/v3/_n43lYHXVWNgXegdYRIK9CF1W_bo0EdycfH0kHciIic.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Jockey One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/jockeyone/v4/cAucnOZLvFo07w2AbufBCfesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Jolly Lodger",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/jollylodger/v3/RX8HnkBgaEKQSHQyP9itiS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Josefin Sans",
   "category": "sans-serif",
   "variants": [
    "100",
    "100italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "600",
    "600italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-05-08",
   "files": {
    "100": "http://themes.googleusercontent.com/static/fonts/josefinsans/v5/q9w3H4aeBxj0hZ8Osfi3d8SVQ0giZ-l_NELu3lgGyYw.ttf",
    "100italic": "http://themes.googleusercontent.com/static/fonts/josefinsans/v5/s7-P1gqRNRNn-YWdOYnAOXXcj1rQwlNLIS625o-SrL0.ttf",
    "300": "http://themes.googleusercontent.com/static/fonts/josefinsans/v5/C6HYlRF50SGJq1XyXj04z6cQoVhARpoaILP7amxE_8g.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/josefinsans/v5/ppse0J9fKSaoxCIIJb33Gyna0FLWfcB-J_SAYmcAXaI.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/josefinsans/v5/xgzbb53t8j-Mo-vYa23n5i3USBnSvpkopQaUR-2r7iU.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/josefinsans/v5/q9w3H4aeBxj0hZ8Osfi3d_MZXuCXbOrAvx5R0IT5Oyo.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/josefinsans/v5/C6HYlRF50SGJq1XyXj04z2v8CylhIUtwUiYO7Z2wXbE.ttf",
    "600italic": "http://themes.googleusercontent.com/static/fonts/josefinsans/v5/ppse0J9fKSaoxCIIJb33G4R-5-urNOGAobhAyctHvW8.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/josefinsans/v5/C6HYlRF50SGJq1XyXj04z0D2ttfZwueP-QU272T9-k4.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/josefinsans/v5/ppse0J9fKSaoxCIIJb33G_As9-1nE9qOqhChW0m4nDE.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Josefin Slab",
   "category": "serif",
   "variants": [
    "100",
    "100italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "600",
    "600italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "100": "http://themes.googleusercontent.com/static/fonts/josefinslab/v4/etsUjZYO8lTLU85lDhZwUsSVQ0giZ-l_NELu3lgGyYw.ttf",
    "100italic": "http://themes.googleusercontent.com/static/fonts/josefinslab/v4/8BjDChqLgBF3RJKfwHIYh3Xcj1rQwlNLIS625o-SrL0.ttf",
    "300": "http://themes.googleusercontent.com/static/fonts/josefinslab/v4/NbE6ykYuM2IyEwxQxOIi2KcQoVhARpoaILP7amxE_8g.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/josefinslab/v4/af9sBoKGPbGO0r21xJulyyna0FLWfcB-J_SAYmcAXaI.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/josefinslab/v4/46aYWdgz-1oFX11flmyEfS3USBnSvpkopQaUR-2r7iU.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/josefinslab/v4/etsUjZYO8lTLU85lDhZwUvMZXuCXbOrAvx5R0IT5Oyo.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/josefinslab/v4/NbE6ykYuM2IyEwxQxOIi2Gv8CylhIUtwUiYO7Z2wXbE.ttf",
    "600italic": "http://themes.googleusercontent.com/static/fonts/josefinslab/v4/af9sBoKGPbGO0r21xJuly4R-5-urNOGAobhAyctHvW8.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/josefinslab/v4/NbE6ykYuM2IyEwxQxOIi2ED2ttfZwueP-QU272T9-k4.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/josefinslab/v4/af9sBoKGPbGO0r21xJuly_As9-1nE9qOqhChW0m4nDE.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Joti One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/jotione/v3/P3r_Th0ESHJdzunsvWgUfQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Judson",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/judson/v6/znM1AAs0eytUaJzf1CrYZQ.ttf",
    "italic": "http://fonts.gstatic.com/s/judson/v6/GVqQW9P52ygW-ySq-CLwAA.ttf",
    "700": "http://fonts.gstatic.com/s/judson/v6/he4a2LwiPJc7r8x0oKCKiA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Julee",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/julee/v5/CAib-jsUsSO8SvVRnE9fHA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Julius Sans One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/juliussansone/v3/iU65JP9acQHPDLkdalCF7jjVlsJB_M_Q_LtZxsoxvlw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Junge",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/junge/v3/j4IXCXtxrw9qIBheercp3A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Jura",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "500",
    "600"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "300": "http://fonts.gstatic.com/s/jura/v6/Rqx_xy1UnN0C7wD3FUSyPQ.ttf",
    "regular": "http://fonts.gstatic.com/s/jura/v6/YAWMwF3sN0KCbynMq-Yr_Q.ttf",
    "500": "http://fonts.gstatic.com/s/jura/v6/16xhfjHCiaLj3tsqqgmtGg.ttf",
    "600": "http://fonts.gstatic.com/s/jura/v6/iwseduOwJSdY8wQ1Y6CJdA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Just Another Hand",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/justanotherhand/v6/fKV8XYuRNNagXr38eqbRf99BnJIEGrvoojniP57E51c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Just Me Again Down Here",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v7",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/justmeagaindownhere/v7/sN06iTc9ITubLTgXoG-kc3M9eVLpVTSK6TqZTIgBrWQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kalam",
   "category": "handwriting",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "devanagari",
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-07-17",
   "files": {
    "300": "http://fonts.gstatic.com/s/kalam/v2/MgQQlk1SgPEHdlkWMNh7Jg.ttf",
    "regular": "http://fonts.gstatic.com/s/kalam/v2/hNEJkp2K-aql7e5WQish4Q.ttf",
    "700": "http://fonts.gstatic.com/s/kalam/v2/95nLItUGyWtNLZjSckluLQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kameron",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/kameron/v5/9r8HYhqDSwcq9WMjupL82A.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/kameron/v5/rabVVbzlflqvmXJUFlKnu_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kantumruy",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v2",
   "lastModified": "2014-07-16",
   "files": {
    "300": "http://fonts.gstatic.com/s/kantumruy/v2/ERRwQE0WG5uanaZWmOFXNi3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "http://fonts.gstatic.com/s/kantumruy/v2/kQfXNYElQxr5dS8FyjD39Q.ttf",
    "700": "http://fonts.gstatic.com/s/kantumruy/v2/gie_zErpGf_rNzs920C2Ji3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Karla",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/karla/v3/78UgGRwJFkhqaoFimqoKpQ.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/karla/v3/51UBKly9RQOnOkj95ZwEFw.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/karla/v3/JS501sZLxZ4zraLQdncOUA.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/karla/v3/3YDyi09gQjCRh-5-SVhTTvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Karma",
   "category": "serif",
   "variants": [
    "300",
    "regular",
    "500",
    "600",
    "700"
   ],
   "subsets": [
    "devanagari",
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-07-17",
   "files": {
    "300": "http://fonts.gstatic.com/s/karma/v2/lH6ijJnguWR2Sz7tEl6MQQ.ttf",
    "regular": "http://fonts.gstatic.com/s/karma/v2/wvqTxAGBUrTqU0urTEoPIw.ttf",
    "500": "http://fonts.gstatic.com/s/karma/v2/9YGjxi6Hcvz2Kh-rzO_cAw.ttf",
    "600": "http://fonts.gstatic.com/s/karma/v2/h_CVzXXtqSxjfS2sIwaejA.ttf",
    "700": "http://fonts.gstatic.com/s/karma/v2/smuSM08oApsQPPVYbHd1CA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kaushan Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/kaushanscript/v2/qx1LSqts-NtiKcLw4N03IBnpV0hQCek3EmWnCPrvGRM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kavoon",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/kavoon/v3/382m-6baKXqJFQjEgobt6Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kdam Thmor",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v2",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/kdamthmor/v2/otCdP6UU-VBIrBfVDWBQJ_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Keania One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/keaniaone/v3/PACrDKZWngXzgo-ucl6buvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kelly Slab",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/kellyslab/v5/F_2oS1e9XdYx1MAi8XEVefesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kenia",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/kenia/v7/OLM9-XfITK9PsTLKbGBrwg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Khand",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "500",
    "600",
    "700"
   ],
   "subsets": [
    "devanagari",
    "latin",
    "latin-ext"
   ],
   "version": "v1",
   "lastModified": "2014-07-17",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/khand/v1/072zRl4OU9Pinjjkg174LA.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/khand/v1/HdLdTNFqNIDGJZl1ZEj84w.ttf",
    "500": "http://themes.googleusercontent.com/static/fonts/khand/v1/46_p-SqtuMe56nxQdteWxg.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/khand/v1/zggGWYIiPJyMTgkfxP_kaA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/khand/v1/0I0UWaN-X5QBmfexpXKhqg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Khmer",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v8",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/khmer/v8/vWaBJIbaQuBNz02ALIKJ3A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kite One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/kiteone/v3/8ojWmgUc97m0f_i6sTqLoQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Knewave",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/knewave/v4/KGHM4XWr4iKnBMqzZLkPBg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kotta One",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/kottaone/v3/AB2Q7hVw6niJYDgLvFXu5w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Koulen",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v9",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/koulen/v9/AAYOK8RSRO7FTskTzFuzNw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kranky",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/kranky/v5/C8dxxTS99-fZ84vWk8SDrg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kreon",
   "category": "serif",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-01-07",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/kreon/v7/HKtJRiq5C2zbq5N1IX32sA.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/kreon/v7/zA_IZt0u0S3cvHJu-n1oEg.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/kreon/v7/jh0dSmaPodjxISiblIUTkw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kristi",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/kristi/v6/aRsgBQrkQkMlu4UPSnJyOQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Krona One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/kronaone/v3/zcQj4ljqTo166AdourlF9w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "La Belle Aurore",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/labelleaurore/v5/Irdbc4ASuUoWDjd_Wc3md123K2iuuhwZgaKapkyRTY8.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lancelot",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/lancelot/v4/XMT7T_oo_MQUGAnU2v-sdA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lato",
   "category": "sans-serif",
   "variants": [
    "100",
    "100italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "700",
    "700italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-01-07",
   "files": {
    "100": "http://themes.googleusercontent.com/static/fonts/lato/v7/Upp-ka9rLQmHYCsFgwL-eg.ttf",
    "100italic": "http://themes.googleusercontent.com/static/fonts/lato/v7/zLegi10uS_9-fnUDISl0KA.ttf",
    "300": "http://themes.googleusercontent.com/static/fonts/lato/v7/Ja02qOppOVq9jeRjWekbHg.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/lato/v7/dVebFcn7EV7wAKwgYestUg.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/lato/v7/h7rISIcQapZBpei-sXwIwg.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/lato/v7/P_dJOFJylV3A870UIOtr0w.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/lato/v7/iX_QxBBZLhNj5JHlTzHQzg.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/lato/v7/WFcZakHrrCKeUJxHA4T_gw.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/lato/v7/8TPEV6NbYWZlNsXjbYVv7w.ttf",
    "900italic": "http://themes.googleusercontent.com/static/fonts/lato/v7/draWperrI7n2xi35Cl08fA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "League Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/leaguescript/v6/wnRFLvfabWK_DauqppD6vSeUSrabuTpOsMEiRLtKwk0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Leckerli One",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/leckerlione/v6/S2Y_iLrItTu8kIJTkS7DrC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ledger",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/ledger/v3/G432jp-tahOfWHbCYkI0jw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lekton",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-07-14",
   "files": {
    "regular": "http://fonts.gstatic.com/s/lekton/v6/r483JYmxf5PjIm4jVAm8Yg.ttf",
    "italic": "http://fonts.gstatic.com/s/lekton/v6/_UbDIPBA1wDqSbhp-OED7A.ttf",
    "700": "http://fonts.gstatic.com/s/lekton/v6/WZw-uL8WTkx3SBVfTlevXQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lemon",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/lemon/v3/wed1nNu4LNSu-3RoRVUhUw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Libre Baskerville",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/librebaskerville/v2/pR0sBQVcY0JZc_ciXjFsKyyZRYCSvpCzQKuMWnP5NDY.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/librebaskerville/v2/QHIOz1iKF3bIEzRdDFaf5QnhapNS5Oi8FPrBRDLbsW4.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/librebaskerville/v2/kH7K4InNTm7mmOXXjrA5v-xuswJKUVpBRfYFpz0W3Iw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Life Savers",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/lifesavers/v5/g49cUDk4Y1P0G5NMkMAm7qCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "http://fonts.gstatic.com/s/lifesavers/v5/THQKqChyYUm97rNPVFdGGXe1Pd76Vl7zRpE7NLJQ7XU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lilita One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/lilitaone/v3/vTxJQjbNV6BCBHx8sGDCVvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lily Script One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/lilyscriptone/v3/uPWsLVW8uiXqIBnE8ZwGPDjVlsJB_M_Q_LtZxsoxvlw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Limelight",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/limelight/v6/5dTfN6igsXjLjOy8QQShcg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Linden Hill",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/lindenhill/v5/UgsC0txqd-E1yjvjutwm_KCWcynf_cDxXwCLxiixG1c.ttf",
    "italic": "http://fonts.gstatic.com/s/lindenhill/v5/OcS3bZcu8vJvIDH8Zic83keOrDcLawS7-ssYqLr2Xp4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lobster",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v9",
   "lastModified": "2014-06-17",
   "files": {
    "regular": "http://fonts.gstatic.com/s/lobster/v9/9LpJGtNuM1D8FAZ2BkJH2Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lobster Two",
   "category": "display",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/lobstertwo/v5/xb9aY4w9ceh8JRzobID1naCWcynf_cDxXwCLxiixG1c.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/lobstertwo/v5/Ul_16MSbfayQv1I4QhLEoEeOrDcLawS7-ssYqLr2Xp4.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/lobstertwo/v5/bmdxOflBqMqjEC0-kGsIiHe1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/lobstertwo/v5/LEkN2_no_6kFvRfiBZ8xpM_zJjSACmk0BRPxQqhnNLU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Londrina Outline",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/londrinaoutline/v4/lls08GOa1eT74p072l1AWJmp8DTZ6iHear7UV05iykg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Londrina Shadow",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/londrinashadow/v3/dNYuzPS_7eYgXFJBzMoKdbw6Z3rVA5KDSi7aQxS92Nk.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Londrina Sketch",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/londrinasketch/v3/p7Ai06aT1Ycp_D2fyE3z69d6z_uhFGnpCOifUY1fJQo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Londrina Solid",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/londrinasolid/v3/yysorIEiYSBb0ylZjg791MR125CwGqh8XBqkBzea0LA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lora",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v7",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/lora/v7/aXJ7KVIGcejEy1abawZazg.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/lora/v7/AN2EZaj2tFRpyveuNn9BOg.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/lora/v7/enKND5SfzQKkggBA_VnT1A.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/lora/v7/ivs9j3kYU65pR9QD9YFdzQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Love Ya Like A Sister",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/loveyalikeasister/v6/LzkxWS-af0Br2Sk_YgSJY-ad1xEP8DQfgfY8MH9aBUg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Loved by the King",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/lovedbytheking/v5/wg03xD4cWigj4YDufLBSr8io2AFEwwMpu7y5KyiyAJc.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lovers Quarrel",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/loversquarrel/v3/gipdZ8b7pKb89MzQLAtJHLHLxci2ElvNEmOB303HLk0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Luckiest Guy",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/luckiestguy/v4/5718gH8nDy3hFVihOpkY5C3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lusitana",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/lusitana/v2/l1h9VDomkwbdzbPdmLcUIw.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/lusitana/v2/GWtZyUsONxgkdl3Mc1P7FKCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lustria",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/lustria/v3/gXAk0s4ai0X-TAOhYzZd1w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Macondo",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/macondo/v4/G6yPNUscRPQ8ufBXs_8yRQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Macondo Swash Caps",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/macondoswashcaps/v3/SsSR706z-MlvEH7_LS6JAPkkgYRHs6GSG949m-K6x2k.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Magra",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/magra/v3/hoZ13bwCXBxuGZqAudgc5A.ttf",
    "700": "http://fonts.gstatic.com/s/magra/v3/6fOM5sq5cIn8D0RjX8Lztw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Maiden Orange",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/maidenorange/v5/ZhKIA2SPisEwdhW7g0RUWojjx0o0jr6fNXxPgYh_a8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mako",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/mako/v6/z5zSLmfPlv1uTVAdmJBLXg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Marcellus",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/marcellus/v3/UjiLZzumxWC9whJ86UtaYw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Marcellus SC",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/marcellussc/v3/_jugwxhkkynrvsfrxVx8gS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Marck Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/marckscript/v5/O_D1NAZVOFOobLbVtW3bci3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Margarine",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/margarine/v4/DJnJwIrcO_cGkjSzY3MERw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Marko One",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/markoone/v5/hpP7j861sOAco43iDc4n4w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Marmelad",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/marmelad/v5/jI0_FBlSOIRLL0ePWOhOwQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Marvel",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/marvel/v4/Fg1dO8tWVb-MlyqhsbXEkg.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/marvel/v4/HzyjFB-oR5usrc7Lxz9g8w.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/marvel/v4/WrHDBL1RupWGo2UcdgxB3Q.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/marvel/v4/Gzf5NT09Y6xskdQRj2kz1qCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mate",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/mate/v4/ooFviPcJ6hZP5bAE71Cawg.ttf",
    "italic": "http://fonts.gstatic.com/s/mate/v4/5XwW6_cbisGvCX5qmNiqfA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mate SC",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/matesc/v4/-YkIT2TZoPZF6pawKzDpWw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Maven Pro",
   "category": "sans-serif",
   "variants": [
    "regular",
    "500",
    "700",
    "900"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/mavenpro/v5/sqPJIFG4gqsjl-0q_46Gbw.ttf",
    "500": "http://themes.googleusercontent.com/static/fonts/mavenpro/v5/SQVfzoJBbj9t3aVcmbspRi3USBnSvpkopQaUR-2r7iU.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/mavenpro/v5/uDssvmXgp7Nj3i336k_dSi3USBnSvpkopQaUR-2r7iU.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/mavenpro/v5/-91TwiFzqeL1F7Kh91APwS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "McLaren",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/mclaren/v3/OprvTGxaiINBKW_1_U0eoQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Meddon",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/meddon/v6/f8zJO98uu2EtSj9p7ci9RA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "MedievalSharp",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/medievalsharp/v7/85X_PjV6tftJ0-rX7KYQkOe45sJkivqprK7VkUlzfg0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Medula One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/medulaone/v5/AasPgDQak81dsTGQHc5zUPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Megrim",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/megrim/v6/e-9jVUC9lv1zxaFQARuftw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Meie Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/meiescript/v3/oTIWE5MmPye-rCyVp_6KEqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Merienda",
   "category": "handwriting",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/merienda/v3/MYY6Og1qZlOQtPW2G95Y3A.ttf",
    "700": "http://fonts.gstatic.com/s/merienda/v3/GlwcvRLlgiVE2MBFQ4r0sKCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Merienda One",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/meriendaone/v6/bCA-uDdUx6nTO8SjzCLXvS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Merriweather",
   "category": "serif",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic",
    "700",
    "700italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-01-07",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/merriweather/v6/ZvcMqxEwPfh2qDWBPxn6nqcQoVhARpoaILP7amxE_8g.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/merriweather/v6/EYh7Vl4ywhowqULgRdYwICna0FLWfcB-J_SAYmcAXaI.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/merriweather/v6/RFda8w1V0eDZheqfcyQ4EC3USBnSvpkopQaUR-2r7iU.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/merriweather/v6/So5lHxHT37p2SS4-t60SlPMZXuCXbOrAvx5R0IT5Oyo.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/merriweather/v6/ZvcMqxEwPfh2qDWBPxn6nkD2ttfZwueP-QU272T9-k4.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/merriweather/v6/EYh7Vl4ywhowqULgRdYwIPAs9-1nE9qOqhChW0m4nDE.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/merriweather/v6/ZvcMqxEwPfh2qDWBPxn6nqObDOjC3UL77puoeHsE3fw.ttf",
    "900italic": "http://themes.googleusercontent.com/static/fonts/merriweather/v6/EYh7Vl4ywhowqULgRdYwIBd0_s6jQr9r5s5OZYvtzBY.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Merriweather Sans",
   "category": "sans-serif",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic",
    "700",
    "700italic",
    "800",
    "800italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/merriweathersans/v3/6LmGj5dOJopQKEkt88Gowan5N8K-_DP0e9e_v51obXQ.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/merriweathersans/v3/nAqt4hiqwq3tzCecpgPmVdytE4nGXk2hYD5nJ740tBw.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/merriweathersans/v3/AKu1CjQ4qnV8MUltkAX3sOAj_ty82iuwwDTNEYXGiyQ.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/merriweathersans/v3/3Mz4hOHzs2npRMG3B1ascZ32VBCoA_HLsn85tSWZmdo.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/merriweathersans/v3/6LmGj5dOJopQKEkt88GowbqxG25nQNOioCZSK4sU-CA.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/merriweathersans/v3/nAqt4hiqwq3tzCecpgPmVbuqAJxizi8Dk_SK5et7kMg.ttf",
    "800": "http://themes.googleusercontent.com/static/fonts/merriweathersans/v3/6LmGj5dOJopQKEkt88GowYufzO2zUYSj5LqoJ3UGkco.ttf",
    "800italic": "http://themes.googleusercontent.com/static/fonts/merriweathersans/v3/nAqt4hiqwq3tzCecpgPmVdDmPrYMy3aZO4LmnZsxTQw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Metal",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v8",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/metal/v8/zA3UOP13ooQcxjv04BZX5g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Metal Mania",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/metalmania/v5/isriV_rAUgj6bPWPN6l9QKCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Metamorphous",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/metamorphous/v5/wGqUKXRinIYggz-BTRU9ei3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Metrophobic",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/metrophobic/v5/SaglWZWCrrv_D17u1i4v_aCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Michroma",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/michroma/v6/0c2XrW81_QsiKV8T9thumA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Milonga",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/milonga/v3/dzNdIUSTGFmy2ahovDRcWg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Miltonian",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/miltonian/v7/Z4HrYZyqm0BnNNzcCUfzoQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Miltonian Tattoo",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/miltoniantattoo/v8/1oU_8OGYwW46eh02YHydn2uk0YtI6thZkz1Hmh-odwg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Miniver",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/miniver/v4/4yTQohOH_cWKRS5laRFhYg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Miss Fajardose",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/missfajardose/v5/WcXjlQPKn6nBfr8LY3ktNu6rPKfVZo7L2bERcf0BDns.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Modern Antiqua",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/modernantiqua/v5/8qX_tr6Xzy4t9fvZDXPkh6rFJ4O13IHVxZbM6yoslpo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Molengo",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/molengo/v5/jcjgeGuzv83I55AzOTpXNQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Molle",
   "category": "handwriting",
   "variants": [
    "italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "italic": "http://fonts.gstatic.com/s/molle/v3/9XTdCsjPXifLqo5et-YoGA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Monda",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/monda/v2/qFMHZ9zvR6B_gnoIgosPrw.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/monda/v2/EVOzZUyc_j1w2GuTgTAW1g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Monofett",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/monofett/v5/C6K5L799Rgxzg2brgOaqAw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Monoton",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/monoton/v5/aCz8ja_bE4dg-7agSvExdw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Monsieur La Doulaise",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/monsieurladoulaise/v4/IMAdMj6Eq9jZ46CPctFtMKP61oAqTJXlx5ZVOBmcPdM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Montaga",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/montaga/v3/PwTwUboiD-M4-mFjZfJs2A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Montez",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/montez/v5/kx58rLOWQQLGFM4pDHv5Ng.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Montserrat",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/montserrat/v4/Kqy6-utIpx_30Xzecmeo8_esZW2xOQ-xsNqO47m55DA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/montserrat/v4/IQHow_FEYlDC4Gzy_m8fcgJKKGfqHaYFsRG-T3ceEVo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Montserrat Alternates",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/montserratalternates/v2/z2n1Sjxk9souK3HCtdHuklPuEVRGaG9GCQnmM16YWq0.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/montserratalternates/v2/YENqOGAVzwIHjYNjmKuAZpeqBKvsAhm-s2I4RVSXFfc.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Montserrat Subrayada",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/montserratsubrayada/v3/nzoCWCz0e9c7Mr2Gl8bbgrJymm6ilkk9f0nDA_sC_qk.ttf",
    "700": "http://fonts.gstatic.com/s/montserratsubrayada/v3/wf-IKpsHcfm0C9uaz9IeGJvEcF1LWArDbGWgKZSH9go.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Moul",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/moul/v7/Kb0ALQnfyXawP1a_P_gpTQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Moulpali",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v8",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/moulpali/v8/diD74BprGhmVkJoerKmrKA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mountains of Christmas",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/mountainsofchristmas/v7/dVGBFPwd6G44IWDbQtPew2Auds3jz1Fxb61CgfaGDr4.ttf",
    "700": "http://fonts.gstatic.com/s/mountainsofchristmas/v7/PymufKtHszoLrY0uiAYKNM9cPTbSBTrQyTa5TWAe3vE.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mouse Memoirs",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/mousememoirs/v3/NBFaaJFux_j0AQbAsW3QeH8f0n03UdmQgF_CLvNR2vg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mr Bedfort",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/mrbedfort/v4/81bGgHTRikLs_puEGshl7_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mr Dafoe",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/mrdafoe/v4/s32Q1S6ZkT7EaX53mUirvQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mr De Haviland",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/mrdehaviland/v4/fD8y4L6PJ4vqDk7z8Y8e27v4lrhng1lzu7-weKO6cw8.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mrs Saint Delafield",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/mrssaintdelafield/v3/vuWagfFT7bj9lFtZOFBwmjHMBelqWf3tJeGyts2SmKU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mrs Sheppards",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/mrssheppards/v4/2WFsWMV3VUeCz6UVH7UjCn8f0n03UdmQgF_CLvNR2vg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Muli",
   "category": "sans-serif",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/muli/v5/VJw4F3ZHRAZ7Hmg3nQu5YQ.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/muli/v5/s-NKMCru8HiyjEt0ZDoBoA.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/muli/v5/KJiP6KznxbALQgfJcDdPAw.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/muli/v5/Cg0K_IWANs9xkNoxV7H1_w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mystery Quest",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/mysteryquest/v3/467jJvg0c7HgucvBB9PLDyeUSrabuTpOsMEiRLtKwk0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Neucha",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "cyrillic"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/neucha/v6/bijdhB-TzQdtpl0ykhGh4Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Neuton",
   "category": "serif",
   "variants": [
    "200",
    "300",
    "regular",
    "italic",
    "700",
    "800"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v7",
   "lastModified": "2014-07-10",
   "files": {
    "200": "http://fonts.gstatic.com/s/neuton/v7/DA3Mkew3XqSkPpi1f4tJow.ttf",
    "300": "http://fonts.gstatic.com/s/neuton/v7/xrc_aZ2hx-gdeV0mlY8Vww.ttf",
    "regular": "http://fonts.gstatic.com/s/neuton/v7/9R-MGIOQUdjAVeB6nE6PcQ.ttf",
    "italic": "http://fonts.gstatic.com/s/neuton/v7/uVMT3JOB5BNFi3lgPp6kEg.ttf",
    "700": "http://fonts.gstatic.com/s/neuton/v7/gnWpkWY7DirkKiovncYrfg.ttf",
    "800": "http://fonts.gstatic.com/s/neuton/v7/XPzBQV4lY6enLxQG9cF1jw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "New Rocker",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/newrocker/v4/EFUWzHJedEkpW399zYOHofesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "News Cycle",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v10",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/newscycle/v10/xyMAr8VfiUzIOvS1abHJO_esZW2xOQ-xsNqO47m55DA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/newscycle/v10/G28Ny31cr5orMqEQy6ljtwJKKGfqHaYFsRG-T3ceEVo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Niconne",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/niconne/v5/ZA-mFw2QNXodx5y7kfELBg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nixie One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/nixieone/v6/h6kQfmzm0Shdnp3eswRaqQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nobile",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/nobile/v5/lC_lPi1ddtN38iXTCRh6ow.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/nobile/v5/vGmrpKzWQQSrb-PR6FWBIA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/nobile/v5/9p6M-Yrg_r_QPmSD1skrOg.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/nobile/v5/oQ1eYPaXV638N03KvsNvyKCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nokora",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v8",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/nokora/v8/dRyz1JfnyKPNaRcBNX9F9A.ttf",
    "700": "http://fonts.gstatic.com/s/nokora/v8/QMqqa4QEOhQpiig3cAPmbQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Norican",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/norican/v3/SHnSqhYAWG5sZTWcPzEHig.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nosifer",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/nosifer/v4/7eJGoIuHRrtcG00j6CptSA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nothing You Could Do",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/nothingyoucoulddo/v5/jpk1K3jbJoyoK0XKaSyQAf-TpkXjXYGWiJZAEtBRjPU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Noticia Text",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "vietnamese"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/noticiatext/v4/wdyV6x3eKpdeUPQ7BJ5uUC3USBnSvpkopQaUR-2r7iU.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/noticiatext/v4/dAuxVpkYE_Q_IwIm6elsKPMZXuCXbOrAvx5R0IT5Oyo.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/noticiatext/v4/pEko-RqEtp45bE2P80AAKUD2ttfZwueP-QU272T9-k4.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/noticiatext/v4/-rQ7V8ARjf28_b7kRa0JuvAs9-1nE9qOqhChW0m4nDE.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Noto Sans",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "devanagari",
    "greek",
    "latin",
    "latin-ext",
    "vietnamese",
    "cyrillic"
   ],
   "version": "v4",
   "lastModified": "2014-07-09",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/notosans/v4/0Ue9FiUJwVhi4NGfHJS5uA.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/notosans/v4/dLcNKMgJ1H5RVoZFraDz0qCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/notosans/v4/PIbvSEyHEdL91QLOQRnZ1y3USBnSvpkopQaUR-2r7iU.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/notosans/v4/9Z3uUWMRR7crzm1TjRicDne1Pd76Vl7zRpE7NLJQ7XU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Noto Serif",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "vietnamese",
    "cyrillic"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/notoserif/v2/zW6mc7bC1CWw8dH0yxY8JfesZW2xOQ-xsNqO47m55DA.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/notoserif/v2/HQXBIwLHsOJCNEQeX9kNzy3USBnSvpkopQaUR-2r7iU.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/notoserif/v2/lJAvZoKA5NttpPc9yc6lPQJKKGfqHaYFsRG-T3ceEVo.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/notoserif/v2/Wreg0Be4tcFGM2t6VWytvED2ttfZwueP-QU272T9-k4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Cut",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/novacut/v7/6q12jWcBvj0KO2cMRP97tA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Flat",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/novaflat/v7/pK7a0CoGzI684qe_XSHBqQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Mono",
   "category": "monospace",
   "variants": [
    "regular"
   ],
   "subsets": [
    "greek",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/novamono/v6/6-SChr5ZIaaasJFBkgrLNw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Oval",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/novaoval/v7/VuukVpKP8BwUf8o9W5LYQQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Round",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/novaround/v7/7-cK3Ari_8XYYFgVMxVhDvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Script",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/novascript/v7/dEvxQDLgx1M1TKY-NmBWYaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Slim",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/novaslim/v7/rPYXC81_VL2EW-4CzBX65g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Square",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/novasquare/v7/BcBzXoaDzYX78rquGXVuSqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Numans",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/numans/v5/g5snI2p6OEjjTNmTHyBdiQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nunito",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/nunito/v5/zXQvrWBJqUooM7Xv98MrQw.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/nunito/v5/ySZTeT3IuzJj0GK6uGpbBg.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/nunito/v5/aEdlqgMuYbpe4U3TnqOQMA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Odor Mean Chey",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/odormeanchey/v7/GK3E7EjPoBkeZhYshGFo0eVKG8sq4NyGgdteJLvqLDs.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Offside",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/offside/v3/v0C913SB8wqQUvcu1faUqw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Old Standard TT",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/oldstandardtt/v5/n6RTCDcIPWSE8UNBa4k-DLcB5jyhm1VsHs65c3QNDr0.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/oldstandardtt/v5/QQT_AUSp4AV4dpJfIN7U5PWrQzeMtsHf8QsWQ2cZg3c.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/oldstandardtt/v5/5Ywdce7XEbTSbxs__4X1_HJqbZqK7TdZ58X80Q_Lw8Y.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oldenburg",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/oldenburg/v3/dqA_M_uoCVXZbCO-oKBTnQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oleo Script",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/oleoscript/v3/21stZcmPyzbQVXtmGegyqKCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/oleoscript/v3/hudNQFKFl98JdNnlo363fne1Pd76Vl7zRpE7NLJQ7XU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oleo Script Swash Caps",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/oleoscriptswashcaps/v3/vdWhGqsBUAP-FF3NOYTe4iMF4kXAPemmyaDpMXQ31P0.ttf",
    "700": "http://fonts.gstatic.com/s/oleoscriptswashcaps/v3/HMO3ftxA9AU5floml9c755reFYaXZ4zuJXJ8fr8OO1g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Open Sans",
   "category": "sans-serif",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic",
    "600",
    "600italic",
    "700",
    "700italic",
    "800",
    "800italic"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "devanagari",
    "greek",
    "latin",
    "latin-ext",
    "vietnamese",
    "cyrillic"
   ],
   "version": "v8",
   "lastModified": "2014-07-14",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/opensans/v8/DXI1ORHCpsQm3Vp6mXoaTS3USBnSvpkopQaUR-2r7iU.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/opensans/v8/PRmiXeptR36kaC0GEAetxi9-WlPSxbfiI49GsXo3q0g.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/opensans/v8/IgZJs4-7SA1XX_edsoXWog.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/opensans/v8/O4NhV7_qs9r9seTo7fnsVKCWcynf_cDxXwCLxiixG1c.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/opensans/v8/MTP_ySUJH_bn48VBG8sNSi3USBnSvpkopQaUR-2r7iU.ttf",
    "600italic": "http://themes.googleusercontent.com/static/fonts/opensans/v8/PRmiXeptR36kaC0GEAetxpZ7xm-Bj30Bj2KNdXDzSZg.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/opensans/v8/k3k702ZOKiLJc3WVjuplzC3USBnSvpkopQaUR-2r7iU.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/opensans/v8/PRmiXeptR36kaC0GEAetxne1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "800": "http://themes.googleusercontent.com/static/fonts/opensans/v8/EInbV5DfGHOiMmvb1Xr-hi3USBnSvpkopQaUR-2r7iU.ttf",
    "800italic": "http://themes.googleusercontent.com/static/fonts/opensans/v8/PRmiXeptR36kaC0GEAetxg89PwPrYLaRFJ-HNCU9NbA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Open Sans Condensed",
   "category": "sans-serif",
   "variants": [
    "300",
    "300italic",
    "700"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "vietnamese",
    "cyrillic"
   ],
   "version": "v7",
   "lastModified": "2014-01-07",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/opensanscondensed/v7/gk5FxslNkTTHtojXrkp-xEMwSSh38KQVJx4ABtsZTnA.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/opensanscondensed/v7/jIXlqT1WKafUSwj6s9AzV4_LkTZ_uhAwfmGJ084hlvM.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/opensanscondensed/v7/gk5FxslNkTTHtojXrkp-xBEM87DM3yorPOrvA-vB930.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oranienbaum",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/oranienbaum/v3/M98jYwCSn0PaFhXXgviCoaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Orbitron",
   "category": "sans-serif",
   "variants": [
    "regular",
    "500",
    "700",
    "900"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/orbitron/v4/DY8swouAZjR3RaUPRf0HDQ.ttf",
    "500": "http://themes.googleusercontent.com/static/fonts/orbitron/v4/p-y_ffzMdo5JN_7ia0vYEqCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/orbitron/v4/PS9_6SLkY1Y6OgPO3APr6qCWcynf_cDxXwCLxiixG1c.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/orbitron/v4/2I3-8i9hT294TE_pyjy9SaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oregano",
   "category": "display",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/oregano/v3/UiLhqNixVv2EpjRoBG6axA.ttf",
    "italic": "http://fonts.gstatic.com/s/oregano/v3/_iwqGEht6XsAuEaCbYG64Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Orienta",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/orienta/v3/_NKSk93mMs0xsqtfjCsB3Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Original Surfer",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/originalsurfer/v4/gdHw6HpSIN4D6Xt7pi1-qIkEz33TDwAZczo_6fY7eg0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oswald",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v8",
   "lastModified": "2014-01-07",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/oswald/v8/y3tZpCdiRD4oNRRYFcAR5Q.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/oswald/v8/uLEd2g2vJglLPfsBF91DCg.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/oswald/v8/7wj8ldV_5Ti37rHa0m1DDw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Over the Rainbow",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/overtherainbow/v6/6gp-gkpI2kie2dHQQLM2jQBdxkZd83xOSx-PAQ2QmiI.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Overlock",
   "category": "display",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/overlock/v3/Z8oYsGi88-E1cUB8YBFMAg.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/overlock/v3/rq6EacukHROOBrFrK_zF6_esZW2xOQ-xsNqO47m55DA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/overlock/v3/Fexr8SqXM8Bm_gEVUA7AKaCWcynf_cDxXwCLxiixG1c.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/overlock/v3/wFWnYgeXKYBks6gEUwYnfAJKKGfqHaYFsRG-T3ceEVo.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/overlock/v3/YPJCVTT8ZbG3899l_-KIGqCWcynf_cDxXwCLxiixG1c.ttf",
    "900italic": "http://themes.googleusercontent.com/static/fonts/overlock/v3/iOZhxT2zlg7W5ij_lb-oDp0EAVxt0G0biEntp43Qt6E.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Overlock SC",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/overlocksc/v4/8D7HYDsvS_g1GhBnlHzgzaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ovo",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/ovo/v6/mFg27dimu3s9t09qjCwB1g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oxygen",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/oxygen/v3/lZ31r0bR1Bzt_DfGZu1S8A.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/oxygen/v3/uhoyAE7XlQL22abzQieHjw.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/oxygen/v3/yLqkmDwuNtt5pSqsJmhyrg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oxygen Mono",
   "category": "monospace",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/oxygenmono/v3/DigTu7k4b7OmM8ubt1Qza6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "PT Mono",
   "category": "monospace",
   "variants": [
    "regular"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/ptmono/v3/QUbM8H9yJK5NhpQ0REO6Wg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "PT Sans",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v6",
   "lastModified": "2014-07-14",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/ptsans/v6/UFoEz2uiuMypUGZL1NKoeg.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/ptsans/v6/yls9EYWOd496wiu7qzfgNg.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/ptsans/v6/F51BEgHuR0tYHxF0bD4vwvesZW2xOQ-xsNqO47m55DA.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/ptsans/v6/lILlYDvubYemzYzN7GbLkC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "PT Sans Caption",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v7",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/ptsanscaption/v7/OXYTDOzBcXU8MTNBvBHeSW8by34Z3mUMtM-o4y-SHCY.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/ptsanscaption/v7/Q-gJrFokeE7JydPpxASt25tc0eyfI4QDEsobEEpk_hA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "PT Sans Narrow",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/ptsansnarrow/v5/UyYrYy3ltEffJV9QueSi4ZTvAuddT2xDMbdz0mdLyZY.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/ptsansnarrow/v5/Q_pTky3Sc3ubRibGToTAYsLtdzs3iyjn_YuT226ZsLU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "PT Serif",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v6",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/ptserif/v6/sAo427rn3-QL9sWCbMZXhA.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/ptserif/v6/9khWhKzhpkH0OkNnBKS3n_esZW2xOQ-xsNqO47m55DA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/ptserif/v6/kyZw18tqQ5if-_wpmxxOeKCWcynf_cDxXwCLxiixG1c.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/ptserif/v6/Foydq9xJp--nfYIx2TBz9QJKKGfqHaYFsRG-T3ceEVo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "PT Serif Caption",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v7",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/ptserifcaption/v7/7xkFOeTxxO1GMC1suOUYWVsRioCqs5fohhaYel24W3k.ttf",
    "italic": "http://fonts.gstatic.com/s/ptserifcaption/v7/0kfPsmrmTSgiec7u_Wa0DB1mqvzPHelJwRcF_s_EUM0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Pacifico",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/pacifico/v5/GIrpeRY1r5CzbfL8r182lw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Paprika",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/paprika/v3/b-VpyoRSieBdB5BPJVF8HQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Parisienne",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/parisienne/v3/TW74B5QISJNx9moxGlmJfvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Passero One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/passeroone/v7/Yc-7nH5deCCv9Ed0MMnAQqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Passion One",
   "category": "display",
   "variants": [
    "regular",
    "700",
    "900"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/passionone/v4/1UIK1tg3bKJ4J3o35M4heqCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/passionone/v4/feOcYDy2R-f3Ysy72PYJ2ne1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/passionone/v4/feOcYDy2R-f3Ysy72PYJ2ienaqEuufTBk9XMKnKmgDA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Pathway Gothic One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/pathwaygothicone/v2/Lqv9ztoTUV8Q0FmQZzPqaA6A6xIYD7vYcYDop1i-K-c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Patrick Hand",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "vietnamese"
   ],
   "version": "v8",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/patrickhand/v8/9BG3JJgt_HlF3NpEUehL0C3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Patrick Hand SC",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "vietnamese"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/patrickhandsc/v3/OYFWCgfCR-7uHIovjUZXsbAgSRh1LpJXlLfl8IbsmHg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Patua One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/patuaone/v4/njZwotTYjswR4qdhsW-kJw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Paytone One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/paytoneone/v6/3WCxC7JAJjQHQVoIE0ZwvqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Peralta",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/peralta/v3/cTJX5KEuc0GKRU9NXSm-8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Permanent Marker",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/permanentmarker/v3/9vYsg5VgPHKK8SXYbf3sMol14xj5tdg9OHF8w4E7StQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Petit Formal Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/petitformalscript/v3/OEZwr2-ovBsq2n3ACCKoEvVPl2Gjtxj0D6F7QLy1VQc.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Petrona",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/petrona/v4/nnQwxlP6dhrGovYEFtemTg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Philosopher",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin",
    "cyrillic"
   ],
   "version": "v5",
   "lastModified": "2014-07-14",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/philosopher/v5/oZLTrB9jmJsyV0u_T0TKEaCWcynf_cDxXwCLxiixG1c.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/philosopher/v5/_9Hnc_gz9k7Qq6uKaeHKmUeOrDcLawS7-ssYqLr2Xp4.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/philosopher/v5/napvkewXG9Gqby5vwGHICHe1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/philosopher/v5/PuKlryTcvTj7-qZWfLCFIM_zJjSACmk0BRPxQqhnNLU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Piedra",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/piedra/v4/owf-AvEEyAj9LJ2tVZ_3Mw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Pinyon Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/pinyonscript/v4/TzghnhfCn7TuE73f-CBQ0CeUSrabuTpOsMEiRLtKwk0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Pirata One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/pirataone/v3/WnbD86B4vB2ckYcL7oxuhvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Plaster",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/plaster/v6/O4QG9Z5116CXyfJdR9zxLw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Play",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/play/v4/GWvfObW8LhtsOX333MCpBg.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/play/v4/crPhg6I0alLI-MpB3vW-zw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Playball",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/playball/v4/3hOFiQm_EUzycTpcN9uz4w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Playfair Display",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v8",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/playfairdisplay/v8/2NBgzUtEeyB-Xtpr9bm1CV6uyC_qD11hrFQ6EGgTJWI.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/playfairdisplay/v8/9MkijrV-dEJ0-_NWV7E6NzMsbnvDNEBX25F5HWk9AhI.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/playfairdisplay/v8/UC3ZEjagJi85gF9qFaBgICsv6SrURqJprbhH_C1Mw8w.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/playfairdisplay/v8/n7G4PqJvFP2Kubl0VBLDECsYW3XoOVcYyYdp9NzzS9E.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/playfairdisplay/v8/UC3ZEjagJi85gF9qFaBgIKqwMe2wjvZrAR44M0BJZ48.ttf",
    "900italic": "http://themes.googleusercontent.com/static/fonts/playfairdisplay/v8/n7G4PqJvFP2Kubl0VBLDEC0JfJ4xmm7j1kL6D7mPxrA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Playfair Display SC",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/playfairdisplaysc/v2/G0-tvBxd4eQRdwFKB8dRkcpjYTDWIvcAwAccqeW9uNM.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/playfairdisplaysc/v2/myuYiFR-4NTrUT4w6TKls2klJsJYggW8rlNoTOTuau0.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/playfairdisplaysc/v2/5ggqGkvWJU_TtW2W8cEubA-Amcyomnuy4WsCiPxGHjw.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/playfairdisplaysc/v2/6X0OQrQhEEnPo56RalREX4krgPi80XvBcbTwmz-rgmU.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/playfairdisplaysc/v2/5ggqGkvWJU_TtW2W8cEubKXL3C32k275YmX_AcBPZ7w.ttf",
    "900italic": "http://themes.googleusercontent.com/static/fonts/playfairdisplaysc/v2/6X0OQrQhEEnPo56RalREX8Zag2q3ssKz8uH1RU4a9gs.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Podkova",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/podkova/v7/eylljyGVfB8ZUQjYY3WZRQ.ttf",
    "700": "http://fonts.gstatic.com/s/podkova/v7/SqW4aa8m_KVrOgYSydQ33vesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Poiret One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/poiretone/v2/dWcYed048E5gHGDIt8i1CPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Poller One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/pollerone/v5/dkctmDlTPcZ6boC8662RA_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Poly",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/poly/v6/bcMAuiacS2qkd54BcwW6_Q.ttf",
    "italic": "http://fonts.gstatic.com/s/poly/v6/Zkx-eIlZSjKUrPGYhV5PeA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Pompiere",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/pompiere/v5/o_va2p9CD5JfmFohAkGZIA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Pontano Sans",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/pontanosans/v2/gTHiwyxi6S7iiHpqAoiE3C3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Port Lligat Sans",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/portlligatsans/v4/CUEdhRk7oC7up0p6t0g4P6mASEpx5X0ZpsuJOuvfOGA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Port Lligat Slab",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/portlligatslab/v4/CUEdhRk7oC7up0p6t0g4PxLSPACXvawUYCBEnHsOe30.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Prata",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/prata/v5/3gmx8r842loRRm9iQkCDGg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Preahvihear",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/preahvihear/v7/82tDI-xTc53CxxOzEG4hDaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Press Start 2P",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "greek",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/pressstart2p/v3/8Lg6LX8-ntOHUQnvQ0E7o1jfl3W46Sz5gOkEVhcFWF4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Princess Sofia",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/princesssofia/v3/8g5l8r9BM0t1QsXLTajDe-wjmA7ie-lFcByzHGRhCIg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Prociono",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/prociono/v5/43ZYDHWogdFeNBWTl6ksmw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Prosto One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/prostoone/v3/bsqnAElAqk9kX7eABTRFJPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Puritan",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/puritan/v6/wv_RtgVBSCn-or2MC0n4Kg.ttf",
    "italic": "http://fonts.gstatic.com/s/puritan/v6/BqZX8Tp200LeMv1KlzXgLQ.ttf",
    "700": "http://fonts.gstatic.com/s/puritan/v6/pJS2SdwI0SCiVnO0iQSFT_esZW2xOQ-xsNqO47m55DA.ttf",
    "700italic": "http://fonts.gstatic.com/s/puritan/v6/rFG3XkMJL75nUNZwCEIJqC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Purple Purse",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/purplepurse/v4/Q5heFUrdmei9axbMITxxxS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Quando",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/quando/v3/03nDiEZuO2-h3xvtG6UmHg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Quantico",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/quantico/v4/pwSnP8Xpaix2rIz99HrSlQ.ttf",
    "italic": "http://fonts.gstatic.com/s/quantico/v4/KQhDd2OsZi6HiITUeFQ2U_esZW2xOQ-xsNqO47m55DA.ttf",
    "700": "http://fonts.gstatic.com/s/quantico/v4/OVZZzjcZ3Hkq2ojVcUtDjaCWcynf_cDxXwCLxiixG1c.ttf",
    "700italic": "http://fonts.gstatic.com/s/quantico/v4/HeCYRcZbdRso3ZUu01ELbQJKKGfqHaYFsRG-T3ceEVo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Quattrocento",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/quattrocento/v5/WZDISdyil4HsmirlOdBRFC3USBnSvpkopQaUR-2r7iU.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/quattrocento/v5/Uvi-cRwyvqFpl9j3oT2mqkD2ttfZwueP-QU272T9-k4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Quattrocento Sans",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/quattrocentosans/v6/efd6FGWWGX5Z3ztwLBrG9eAj_ty82iuwwDTNEYXGiyQ.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/quattrocentosans/v6/8PXYbvM__bjl0rBnKiByg532VBCoA_HLsn85tSWZmdo.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/quattrocentosans/v6/tXSgPxDl7Lk8Zr_5qX8FIbqxG25nQNOioCZSK4sU-CA.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/quattrocentosans/v6/8N1PdXpbG6RtFvTjl-5E7buqAJxizi8Dk_SK5et7kMg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Questrial",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/questrial/v4/MoHHaw_WwNs_hd9ob1zTVw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Quicksand",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/quicksand/v3/qhfoJiLu10kFjChCCTvGlC3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/quicksand/v3/Ngv3fIJjKB7sD-bTUGIFCA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/quicksand/v3/32nyIRHyCu6iqEka_hbKsi3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Quintessential",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/quintessential/v3/mmk6ioesnTrEky_Zb92E5s02lXbtMOtZWfuxKeMZO8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Qwigley",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/qwigley/v5/aDqxws-KubFID85TZHFouw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Racing Sans One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/racingsansone/v3/1r3DpWaCiT7y3PD4KgkNyDjVlsJB_M_Q_LtZxsoxvlw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Radley",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v8",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/radley/v8/FgE9di09a-mXGzAIyI6Q9Q.ttf",
    "italic": "http://fonts.gstatic.com/s/radley/v8/Z_JcACuPAOO2f9kzQcGRug.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rajdhani",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "500",
    "600",
    "700"
   ],
   "subsets": [
    "devanagari",
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-07-17",
   "files": {
    "300": "http://fonts.gstatic.com/s/rajdhani/v2/9pItuEhQZVGdq8spnHTku6CWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "http://fonts.gstatic.com/s/rajdhani/v2/Wfy5zp4PGFAFS7-Wetehzw.ttf",
    "500": "http://fonts.gstatic.com/s/rajdhani/v2/nd_5ZpVwm710HcLual0fBqCWcynf_cDxXwCLxiixG1c.ttf",
    "600": "http://fonts.gstatic.com/s/rajdhani/v2/5fnmZahByDeTtgxIiqbJSaCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "http://fonts.gstatic.com/s/rajdhani/v2/UBK6d2Hg7X7wYLlF92aXW6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Raleway",
   "category": "sans-serif",
   "variants": [
    "100",
    "200",
    "300",
    "regular",
    "500",
    "600",
    "700",
    "800",
    "900"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-01-07",
   "files": {
    "100": "http://themes.googleusercontent.com/static/fonts/raleway/v7/UDfD6oxBaBnmFJwQ7XAFNw.ttf",
    "200": "http://themes.googleusercontent.com/static/fonts/raleway/v7/LAQwev4hdCtYkOYX4Oc7nPesZW2xOQ-xsNqO47m55DA.ttf",
    "300": "http://themes.googleusercontent.com/static/fonts/raleway/v7/2VvSZU2kb4DZwFfRM4fLQPesZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/raleway/v7/_dCzxpXzIS3sL-gdJWAP8A.ttf",
    "500": "http://themes.googleusercontent.com/static/fonts/raleway/v7/348gn6PEmbLDWlHbbV15d_esZW2xOQ-xsNqO47m55DA.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/raleway/v7/M7no6oPkwKYJkedjB1wqEvesZW2xOQ-xsNqO47m55DA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/raleway/v7/VGEV9-DrblisWOWLbK-1XPesZW2xOQ-xsNqO47m55DA.ttf",
    "800": "http://themes.googleusercontent.com/static/fonts/raleway/v7/mMh0JrsYMXcLO69jgJwpUvesZW2xOQ-xsNqO47m55DA.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/raleway/v7/ajQQGcDBLcyLpaUfD76UuPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Raleway Dots",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/ralewaydots/v3/lhLgmWCRcyz-QXo8LCzTfC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rambla",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/rambla/v2/YaTmpvm5gFg_ShJKTQmdzg.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/rambla/v2/mhUgsKmp0qw3uATdDDAuwA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/rambla/v2/C5VZH8BxQKmnBuoC00UPpw.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/rambla/v2/ziMzUZya6QahrKONSI1TzqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rammetto One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/rammettoone/v4/mh0uQ1tV8QgSx9v_KyEYPC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ranchers",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/ranchers/v3/9ya8CZYhqT66VERfjQ7eLA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rancho",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/rancho/v4/ekp3-4QykC4--6KaslRgHA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rationale",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/rationale/v6/7M2eN-di0NGLQse7HzJRfg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Redressed",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/redressed/v5/3aZ5sTBppH3oSm5SabegtA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Reenie Beanie",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/reeniebeanie/v4/ljpKc6CdXusL1cnGUSamX4jjx0o0jr6fNXxPgYh_a8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Revalia",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/revalia/v3/1TKw66fF5_poiL0Ktgo4_A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ribeye",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/ribeye/v4/e5w3VE8HnWBln4Ll6lUj3Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ribeye Marrow",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/ribeyemarrow/v5/q7cBSA-4ErAXBCDFPrhlY0cTNmV93fYG7UKgsLQNQWs.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Righteous",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/righteous/v3/0nRRWM_gCGCt2S-BCfN8WQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Risque",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/risque/v3/92RnElGnl8yHP97-KV3Fyg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Roboto",
   "category": "sans-serif",
   "variants": [
    "100",
    "100italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "500",
    "500italic",
    "700",
    "700italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "vietnamese",
    "cyrillic"
   ],
   "version": "v11",
   "lastModified": "2014-07-14",
   "files": {
    "100": "http://themes.googleusercontent.com/static/fonts/roboto/v11/7MygqTe2zs9YkP0adA9QQQ.ttf",
    "100italic": "http://themes.googleusercontent.com/static/fonts/roboto/v11/T1xnudodhcgwXCmZQ490TPesZW2xOQ-xsNqO47m55DA.ttf",
    "300": "http://themes.googleusercontent.com/static/fonts/roboto/v11/dtpHsbgPEm2lVWciJZ0P-A.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/roboto/v11/iE8HhaRzdhPxC93dOdA056CWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/roboto/v11/W5F8_SL0XFawnjxHGsZjJA.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/roboto/v11/hcKoSgxdnKlbH5dlTwKbow.ttf",
    "500": "http://themes.googleusercontent.com/static/fonts/roboto/v11/Uxzkqj-MIMWle-XP2pDNAA.ttf",
    "500italic": "http://themes.googleusercontent.com/static/fonts/roboto/v11/daIfzbEw-lbjMyv4rMUUTqCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/roboto/v11/bdHGHleUa-ndQCOrdpfxfw.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/roboto/v11/owYYXKukxFDFjr0ZO8NXh6CWcynf_cDxXwCLxiixG1c.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/roboto/v11/H1vB34nOKWXqzKotq25pcg.ttf",
    "900italic": "http://themes.googleusercontent.com/static/fonts/roboto/v11/b9PWBSMHrT2zM5FgUdtu0aCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Roboto Condensed",
   "category": "sans-serif",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "vietnamese",
    "cyrillic"
   ],
   "version": "v9",
   "lastModified": "2014-07-14",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/robotocondensed/v9/b9QBgL0iMZfDSpmcXcE8nJRhFVcex_hajThhFkHyhYk.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/robotocondensed/v9/mg0cGfGRUERshzBlvqxeAPYa9bgCHecWXGgisnodcS0.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/robotocondensed/v9/Zd2E9abXLFGSr9G3YK2MsKDbm6fPDOZJsR8PmdG62gY.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/robotocondensed/v9/BP5K8ZAJv9qEbmuFp8RpJY_eiqgTfYGaH0bJiUDZ5GA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/robotocondensed/v9/b9QBgL0iMZfDSpmcXcE8nPOYkGiSOYDq_T7HbIOV1hA.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/robotocondensed/v9/mg0cGfGRUERshzBlvqxeAE2zk2RGRC3SlyyLLQfjS_8.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Roboto Slab",
   "category": "serif",
   "variants": [
    "100",
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "vietnamese",
    "cyrillic"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "100": "http://themes.googleusercontent.com/static/fonts/robotoslab/v3/MEz38VLIFL-t46JUtkIEgIAWxXGWZ3yJw6KhWS7MxOk.ttf",
    "300": "http://themes.googleusercontent.com/static/fonts/robotoslab/v3/dazS1PrQQuCxC3iOAJFEJS9-WlPSxbfiI49GsXo3q0g.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/robotoslab/v3/3__ulTNA7unv0UtplybPiqCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/robotoslab/v3/dazS1PrQQuCxC3iOAJFEJXe1Pd76Vl7zRpE7NLJQ7XU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rochester",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/rochester/v5/bnj8tmQBiOkdji_G_yvypg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rock Salt",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/rocksalt/v4/Zy7JF9h9WbhD9V3SFMQ1UQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rokkitt",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/rokkitt/v6/GMA7Z_ToF8uSvpZAgnp_VQ.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/rokkitt/v6/gxlo-sr3rPmvgSixYog_ofesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Romanesco",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/romanesco/v4/2udIjUrpK_CPzYSxRVzD4Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ropa Sans",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-17",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/ropasans/v3/Gba7ZzVBuhg6nX_AoSwlkQ.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/ropasans/v3/V1zbhZQscNrh63dy5Jk2nqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rosario",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v9",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/rosario/v9/bL-cEh8dXtDupB2WccA2LA.ttf",
    "italic": "http://fonts.gstatic.com/s/rosario/v9/pkflNy18HEuVVx4EOjeb_Q.ttf",
    "700": "http://fonts.gstatic.com/s/rosario/v9/nrS6PJvDWN42RP4TFWccd_esZW2xOQ-xsNqO47m55DA.ttf",
    "700italic": "http://fonts.gstatic.com/s/rosario/v9/EOgFX2Va5VGrkhn_eDpIRS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rosarivo",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/rosarivo/v3/EmPiINK0qyqc7KSsNjJamA.ttf",
    "italic": "http://fonts.gstatic.com/s/rosarivo/v3/u3VuWsWQlX1pDqsbz4paNPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rouge Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/rougescript/v4/AgXDSqZJmy12qS0ixjs6Vy3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rubik Mono One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/rubikmonoone/v2/e_cupPtD4BrZzotubJD7UbAREgn5xbW23GEXXnhMQ5Y.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rubik One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/rubikone/v2/Zs6TtctNRSIR8T5PO018rQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ruda",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700",
    "900"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/ruda/v6/jPEIPB7DM2DNK_uBGv2HGw.ttf",
    "700": "http://fonts.gstatic.com/s/ruda/v6/JABOu1SYOHcGXVejUq4w6g.ttf",
    "900": "http://fonts.gstatic.com/s/ruda/v6/Uzusv-enCjoIrznlJJaBRw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rufina",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/rufina/v3/s9IFr_fIemiohfZS-ZRDbQ.ttf",
    "700": "http://fonts.gstatic.com/s/rufina/v3/D0RUjXFr55y4MVZY2Ww_RA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ruge Boogie",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/rugeboogie/v6/U-TTmltL8aENLVIqYbI5QaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ruluko",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/ruluko/v3/lv4cMwJtrx_dzmlK5SDc1g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rum Raisin",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/rumraisin/v3/kDiL-ntDOEq26B7kYM7cx_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ruslan Display",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/ruslandisplay/v6/SREdhlyLNUfU1VssRBfs3rgH88D3l9N4auRNHrNS708.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Russo One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/russoone/v2/zfwxZ--UhUc7FVfgT21PRQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ruthie",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/ruthie/v5/vJ2LorukHSbWYoEs5juivg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rye",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/rye/v3/VUrJlpPpSZxspl3w_yNOrQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sacramento",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sacramento/v3/_kv-qycSHMNdhjiv0Kj7BvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sail",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sail/v5/iuEoG6kt-bePGvtdpL0GUQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Salsa",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/salsa/v5/BnpUCBmYdvggScEPs5JbpA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sanchez",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/sanchez/v2/BEL8ao-E2LJ5eHPLB2UAiw.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/sanchez/v2/iSrhkWLexUZzDeNxNEHtzA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sancreek",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sancreek/v6/8ZacBMraWMvHly4IJI3esw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sansita One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sansitaone/v5/xWqf68oB50JXqGIRR0h2hqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sarina",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sarina/v4/XYtRfaSknHIU3NHdfTdXoQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Satisfy",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/satisfy/v4/PRlyepkd-JCGHiN8e9WV2w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Scada",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/scada/v2/iZNC3ZEYwe3je6H-28d5Ug.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/scada/v2/PCGyLT1qNawkOUQ3uHFhBw.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/scada/v2/t6XNWdMdVWUz93EuRVmifQ.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/scada/v2/kLrBIf7V4mDMwcd_Yw7-D_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Schoolbell",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/schoolbell/v5/95-3djEuubb3cJx-6E7j4vesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Seaweed Script",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/seaweedscript/v3/eorWAPpOvvWrPw5IHwE60BnpV0hQCek3EmWnCPrvGRM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sevillana",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sevillana/v3/6m1Nh35oP7YEt00U80Smiw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Seymour One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/seymourone/v3/HrdG2AEG_870Xb7xBVv6C6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Shadows Into Light",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/shadowsintolight/v4/clhLqOv7MXn459PTh0gXYAW_5bEze-iLRNvGrRpJsfM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Shadows Into Light Two",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/shadowsintolighttwo/v2/gDxHeefcXIo-lOuZFCn2xVQrZk-Pga5KeEE_oZjkQjQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Shanti",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/shanti/v6/lc4nG_JG6Q-2FQSOMMhb_w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Share",
   "category": "display",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/share/v4/1ytD7zSb_-g9I2GG67vmVw.ttf",
    "italic": "http://fonts.gstatic.com/s/share/v4/a9YGdQWFRlNJ0zClJVaY3Q.ttf",
    "700": "http://fonts.gstatic.com/s/share/v4/XrU8e7a1YKurguyY2azk1Q.ttf",
    "700italic": "http://fonts.gstatic.com/s/share/v4/A992-bLVYwAflKu6iaznufesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Share Tech",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sharetech/v3/Dq3DuZ5_0SW3oEfAWFpen_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Share Tech Mono",
   "category": "monospace",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sharetechmono/v3/RQxK-3RA0Lnf3gnnnNrAscwD6PD0c3_abh9zHKQtbGU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Shojumaru",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/shojumaru/v3/WP8cxonzQQVAoI3RJQ2wug.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Short Stack",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/shortstack/v5/v4dXPI0Rm8XN9gk4SDdqlqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Siemreap",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v8",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/siemreap/v8/JSK-mOIsXwxo-zE9XDDl_g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sigmar One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sigmarone/v5/oh_5NxD5JBZksdo2EntKefesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Signika",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "600",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/signika/v4/0wDPonOzsYeEo-1KO78w4fesZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/signika/v4/WvDswbww0oAtvBg2l1L-9w.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/signika/v4/lQMOF6NUN2ooR7WvB7tADvesZW2xOQ-xsNqO47m55DA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/signika/v4/lEcnfPBICWJPv5BbVNnFJPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Signika Negative",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "600",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "300": "http://fonts.gstatic.com/s/signikanegative/v4/q5TOjIw4CenPw6C-TW06FjYFXpUPtCmIEFDvjUnLLaI.ttf",
    "regular": "http://fonts.gstatic.com/s/signikanegative/v4/Z-Q1hzbY8uAo3TpTyPFMXVM1lnCWMnren5_v6047e5A.ttf",
    "600": "http://fonts.gstatic.com/s/signikanegative/v4/q5TOjIw4CenPw6C-TW06FrKLaDJM01OezSVA2R_O3qI.ttf",
    "700": "http://fonts.gstatic.com/s/signikanegative/v4/q5TOjIw4CenPw6C-TW06FpYzPxtVvobH1w3hEppR8WI.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Simonetta",
   "category": "display",
   "variants": [
    "regular",
    "italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/simonetta/v4/fN8puNuahBo4EYMQgp12Yg.ttf",
    "italic": "http://fonts.gstatic.com/s/simonetta/v4/ynxQ3FqfF_Nziwy3T9ZwL6CWcynf_cDxXwCLxiixG1c.ttf",
    "900": "http://fonts.gstatic.com/s/simonetta/v4/22EwvvJ2r1VwVCxit5LcVi3USBnSvpkopQaUR-2r7iU.ttf",
    "900italic": "http://fonts.gstatic.com/s/simonetta/v4/WUXOpCgBZaRPrWtMCpeKoienaqEuufTBk9XMKnKmgDA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sintony",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sintony/v3/IDhCijoIMev2L6Lg5QsduQ.ttf",
    "700": "http://fonts.gstatic.com/s/sintony/v3/zVXQB1wqJn6PE4dWXoYpvPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sirin Stencil",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sirinstencil/v4/pRpLdo0SawzO7MoBpvowsImg74kgS1F7KeR8rWhYwkU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Six Caps",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sixcaps/v6/_XeDnO0HOV8Er9u97If1tQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Skranji",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/skranji/v3/jnOLPS0iZmDL7dfWnW3nIw.ttf",
    "700": "http://fonts.gstatic.com/s/skranji/v3/Lcrhg-fviVkxiEgoadsI1vesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Slabo 13px",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v1",
   "lastModified": "2014-07-08",
   "files": {
    "regular": "http://fonts.gstatic.com/s/slabo13px/v1/jPGWFTjRXfCSzy0qd1nqdvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Slabo 27px",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v1",
   "lastModified": "2014-07-08",
   "files": {
    "regular": "http://fonts.gstatic.com/s/slabo27px/v1/gC0o8B9eU21EafNkXlRAfPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Slackey",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/slackey/v5/evRIMNhGVCRJvCPv4kteeA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Smokum",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/smokum/v5/8YP4BuAcy97X8WfdKfxVRw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Smythe",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/smythe/v6/yACD1gy_MpbB9Ft42fUvYw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sniglet",
   "category": "display",
   "variants": [
    "regular",
    "800"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sniglet/v6/XWhyQLHH4SpCVsHRPRgu9w.ttf",
    "800": "http://fonts.gstatic.com/s/sniglet/v6/NLF91nBmcEfkBgcEWbHFa_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Snippet",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/snippet/v5/eUcYMLq2GtHZovLlQH_9kA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Snowburst One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/snowburstone/v3/zSQzKOPukXRux2oTqfYJjIjjx0o0jr6fNXxPgYh_a8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sofadi One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sofadione/v3/nirf4G12IcJ6KI8Eoj119fesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sofia",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sofia/v4/Imnvx0Ag9r6iDBFUY5_RaQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sonsie One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sonsieone/v4/KSP7xT1OSy0q2ob6RQOTWPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sorts Mill Goudy",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sortsmillgoudy/v5/JzRrPKdwEnE8F1TDmDLMUlIL2Qjg-Xlsg_fhGbe2P5U.ttf",
    "italic": "http://fonts.gstatic.com/s/sortsmillgoudy/v5/UUu1lKiy4hRmBWk599VL1TYNkCNSzLyoucKmbTguvr0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Source Code Pro",
   "category": "monospace",
   "variants": [
    "200",
    "300",
    "regular",
    "500",
    "600",
    "700",
    "900"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-03-18",
   "files": {
    "200": "http://themes.googleusercontent.com/static/fonts/sourcecodepro/v4/leqv3v-yTsJNC7nFznSMqaXvKVW_haheDNrHjziJZVk.ttf",
    "300": "http://themes.googleusercontent.com/static/fonts/sourcecodepro/v4/leqv3v-yTsJNC7nFznSMqVP7R5lD_au4SZC6Ks_vyWs.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/sourcecodepro/v4/mrl8jkM18OlOQN8JLgasD9Rl0pGnog23EMYRrBmUzJQ.ttf",
    "500": "http://themes.googleusercontent.com/static/fonts/sourcecodepro/v4/leqv3v-yTsJNC7nFznSMqX63uKwMO11Of4rJWV582wg.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/sourcecodepro/v4/leqv3v-yTsJNC7nFznSMqeiMeWyi5E_-XkTgB5psiDg.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/sourcecodepro/v4/leqv3v-yTsJNC7nFznSMqfgXsetDviZcdR5OzC1KPcw.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/sourcecodepro/v4/leqv3v-yTsJNC7nFznSMqRA_awHl7mXRjE_LQVochcU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Source Sans Pro",
   "category": "sans-serif",
   "variants": [
    "200",
    "200italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "600",
    "600italic",
    "700",
    "700italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "vietnamese"
   ],
   "version": "v7",
   "lastModified": "2014-01-07",
   "files": {
    "200": "http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/toadOcfmlt9b38dHJxOBGKXvKVW_haheDNrHjziJZVk.ttf",
    "200italic": "http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/fpTVHK8qsXbIeTHTrnQH6OptKU7UIBg2hLM7eMTU8bI.ttf",
    "300": "http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/toadOcfmlt9b38dHJxOBGFP7R5lD_au4SZC6Ks_vyWs.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/fpTVHK8qsXbIeTHTrnQH6DUpNKoQAsDux-Todp8f29w.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/ODelI1aHBYDBqgeIAH2zlNRl0pGnog23EMYRrBmUzJQ.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/M2Jd71oPJhLKp0zdtTvoMwRX4TIfMQQEXLu74GftruE.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/toadOcfmlt9b38dHJxOBGOiMeWyi5E_-XkTgB5psiDg.ttf",
    "600italic": "http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/fpTVHK8qsXbIeTHTrnQH6Pp6lGoTTgjlW0sC4r900Co.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/toadOcfmlt9b38dHJxOBGPgXsetDviZcdR5OzC1KPcw.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/fpTVHK8qsXbIeTHTrnQH6LVT4locI09aamSzFGQlDMY.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/toadOcfmlt9b38dHJxOBGBA_awHl7mXRjE_LQVochcU.ttf",
    "900italic": "http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/fpTVHK8qsXbIeTHTrnQH6A0NcF6HPGWR298uWIdxWv0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Source Serif Pro",
   "category": "serif",
   "variants": [
    "regular",
    "600",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v1",
   "lastModified": "2014-06-19",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/sourceserifpro/v1/CeUM4np2c42DV49nanp55YGL0S0YDpKs5GpLtZIQ0m4.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/sourceserifpro/v1/yd5lDMt8Sva2PE17yiLarGi4cQnvCGV11m1KlXh97aQ.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/sourceserifpro/v1/yd5lDMt8Sva2PE17yiLarEkpYHRvxGNSCrR82n_RDNk.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Special Elite",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/specialelite/v4/9-wW4zu3WNoD5Fjka35Jm4jjx0o0jr6fNXxPgYh_a8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Spicy Rice",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/spicyrice/v4/WGCtz7cLoggXARPi9OGD6_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Spinnaker",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v7",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/spinnaker/v7/MQdIXivKITpjROUdiN6Jgg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Spirax",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/spirax/v4/IOKqhk-Ccl7y31yDsePPkw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Squada One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/squadaone/v3/3tzGuaJdD65cZVgfQzN8uvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Stalemate",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/stalemate/v3/wQLCnG0qB6mOu2Wit2dt_w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Stalinist One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/stalinistone/v5/ltOD4Zj3WJDXYjAIR-9vZojjx0o0jr6fNXxPgYh_a8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Stardos Stencil",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/stardosstencil/v5/ygEOyTW9a6u4fi4OXEZeTFf2eT4jUldwg_9fgfY_tHc.ttf",
    "700": "http://fonts.gstatic.com/s/stardosstencil/v5/h4ExtgvoXhPtv9Ieqd-XC81wDCbBgmIo8UyjIhmkeSM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Stint Ultra Condensed",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/stintultracondensed/v4/8DqLK6-YSClFZt3u3EgOUYelbRYnLTTQA1Z5cVLnsI4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Stint Ultra Expanded",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/stintultraexpanded/v3/FeigX-wDDgHMCKuhekhedQ7dxr0N5HY0cZKknTIL6n4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Stoke",
   "category": "serif",
   "variants": [
    "300",
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "300": "http://fonts.gstatic.com/s/stoke/v5/Sell9475FOS8jUqQsfFsUQ.ttf",
    "regular": "http://fonts.gstatic.com/s/stoke/v5/A7qJNoqOm2d6o1E6e0yUFg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Strait",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/strait/v3/m4W73ViNmProETY2ybc-Bg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sue Ellen Francisco",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sueellenfrancisco/v6/TwHX4vSxMUnJUdEz1JIgrhzazJzPVbGl8jnf1tisRz4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sunshiney",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/sunshiney/v5/kaWOb4pGbwNijM7CkxK1sQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Supermercado One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/supermercadoone/v5/kMGPVTNFiFEp1U274uBMb4mm5hmSKNFf3C5YoMa-lrM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Suwannaphum",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v8",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/suwannaphum/v8/1jIPOyXied3T79GCnSlCN6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Swanky and Moo Moo",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/swankyandmoomoo/v5/orVNZ9kDeE3lWp3U3YELu9DVLKqNC3_XMNHhr8S94FU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Syncopate",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/syncopate/v4/RQVwO52fAH6MI764EcaYtw.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/syncopate/v4/S5z8ixiOoC4WJ1im6jAlYC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Tangerine",
   "category": "handwriting",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/tangerine/v4/DTPeM3IROhnkz7aYG2a9sA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/tangerine/v4/UkFsr-RwJB_d2l9fIWsx3i3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Taprom",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/taprom/v7/-KByU3BaUsyIvQs79qFObg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Tauri",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/tauri/v3/XIWeYJDXNqiVNej0zEqtGg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Teko",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "500",
    "600",
    "700"
   ],
   "subsets": [
    "devanagari",
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-07-17",
   "files": {
    "300": "http://fonts.gstatic.com/s/teko/v2/OobFGE9eo24rcBpN6zXDaQ.ttf",
    "regular": "http://fonts.gstatic.com/s/teko/v2/UtekqODEqZXSN2L-njejpA.ttf",
    "500": "http://fonts.gstatic.com/s/teko/v2/FQ0duU7gWM4cSaImOfAjBA.ttf",
    "600": "http://fonts.gstatic.com/s/teko/v2/QDx_i8H-TZ1IK1JEVrqwEQ.ttf",
    "700": "http://fonts.gstatic.com/s/teko/v2/xKfTxe_SWpH4xU75vmvylA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Telex",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/telex/v2/24-3xP9ywYeHOcFU3iGk8A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Tenor Sans",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/tenorsans/v6/dUBulmjNJJInvK5vL7O9yfesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Text Me One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/textmeone/v3/9em_3ckd_P5PQkP4aDyDLqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "The Girl Next Door",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/thegirlnextdoor/v6/cWRA4JVGeEcHGcPl5hmX7kzo0nFFoM60ux_D9BUymX4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Tienne",
   "category": "serif",
   "variants": [
    "regular",
    "700",
    "900"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/tienne/v7/-IIfDl701C0z7-fy2kmGvA.ttf",
    "700": "http://fonts.gstatic.com/s/tienne/v7/JvoCDOlyOSEyYGRwCyfs3g.ttf",
    "900": "http://fonts.gstatic.com/s/tienne/v7/FBano5T521OWexj2iRYLMw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Tinos",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "vietnamese",
    "cyrillic"
   ],
   "version": "v6",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/tinos/v6/EqpUbkVmutfwZ0PjpoGwCg.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/tinos/v6/slfyzlasCr9vTsaP4lUh9A.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/tinos/v6/vHXfhX8jZuQruowfon93yQ.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/tinos/v6/M6kfzvDMM0CdxdraoFpG6vesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Titan One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/titanone/v3/FbvpRvzfV_oipS0De3iAZg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Titillium Web",
   "category": "sans-serif",
   "variants": [
    "200",
    "200italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "600",
    "600italic",
    "700",
    "700italic",
    "900"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v2",
   "lastModified": "2014-01-07",
   "files": {
    "200": "http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wprzOdCrLccoxq42eaxM802O0.ttf",
    "200italic": "http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/RZunN20OBmkvrU7sA4GPPj4N98U-66ThNJvtgddRfBE.ttf",
    "300": "http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr9ZAkYT8DuUZELiKLwMGWAo.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/RZunN20OBmkvrU7sA4GPPrfzCkqg7ORZlRf2cc4mXu8.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/7XUFZ5tgS-tD6QamInJTcTyagQBwYgYywpS70xNq8SQ.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/r9OmwyQxrgzUAhaLET_KO-ixohbIP6lHkU-1Mgq95cY.ttf",
    "600": "http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr28K9dEd5Ue-HTQrlA7E2xQ.ttf",
    "600italic": "http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/RZunN20OBmkvrU7sA4GPPgOhzTSndyK8UWja2yJjKLc.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr2-6tpSbB9YhmWtmd1_gi_U.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/RZunN20OBmkvrU7sA4GPPio3LEw-4MM8Ao2j9wPOfpw.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr7L0GmZLri-m-nfoo0Vul4Y.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Trade Winds",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/tradewinds/v4/sDOCVgAxw6PEUi2xdMsoDaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Trocchi",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/trocchi/v3/uldNPaKrUGVeGCVsmacLwA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Trochut",
   "category": "display",
   "variants": [
    "regular",
    "italic",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/trochut/v3/6Y65B0x-2JsnYt16OH5omw.ttf",
    "italic": "http://fonts.gstatic.com/s/trochut/v3/pczUwr4ZFvC79TgNO5cZng.ttf",
    "700": "http://fonts.gstatic.com/s/trochut/v3/lWqNOv6ISR8ehNzGLFLnJ_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Trykker",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/trykker/v4/YiVrVJpBFN7I1l_CWk6yYQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Tulpen One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/tulpenone/v5/lwcTfVIEVxpZLZlWzR5baPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ubuntu",
   "category": "sans-serif",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic",
    "500",
    "500italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "300": "http://themes.googleusercontent.com/static/fonts/ubuntu/v5/7-wH0j2QCTHKgp7vLh9-sQ.ttf",
    "300italic": "http://themes.googleusercontent.com/static/fonts/ubuntu/v5/j-TYDdXcC_eQzhhp386SjaCWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/ubuntu/v5/lhhB5ZCwEkBRbHMSnYuKyA.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/ubuntu/v5/b9hP8wd30SygxZjGGk4DCQ.ttf",
    "500": "http://themes.googleusercontent.com/static/fonts/ubuntu/v5/bMbHEMwSUmkzcK2x_74QbA.ttf",
    "500italic": "http://themes.googleusercontent.com/static/fonts/ubuntu/v5/NWdMogIO7U6AtEM4dDdf_aCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/ubuntu/v5/B7BtHjNYwAp3HgLNagENOQ.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/ubuntu/v5/pqisLQoeO9YTDCNnlQ9bf6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ubuntu Condensed",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v4",
   "lastModified": "2014-07-14",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/ubuntucondensed/v4/DBCt-NXN57MTAFjitYxdrKDbm6fPDOZJsR8PmdG62gY.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ubuntu Mono",
   "category": "monospace",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "greek-ext",
    "cyrillic-ext",
    "greek",
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v4",
   "lastModified": "2014-07-14",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/ubuntumono/v4/EgeuS9OtEmA0y_JRo03MQaCWcynf_cDxXwCLxiixG1c.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/ubuntumono/v4/KAKuHXAHZOeECOWAHsRKA0eOrDcLawS7-ssYqLr2Xp4.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/ubuntumono/v4/ceqTZGKHipo8pJj4molytne1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/ubuntumono/v4/n_d8tv_JOIiYyMXR4eaV9c_zJjSACmk0BRPxQqhnNLU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ultra",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/ultra/v7/OW8uXkOstRADuhEmGOFQLA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Uncial Antiqua",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/uncialantiqua/v3/F-leefDiFwQXsyd6eaSllqrFJ4O13IHVxZbM6yoslpo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Underdog",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v4",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/underdog/v4/gBv9yjez_-5PnTprHWq0ig.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Unica One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/unicaone/v3/KbYKlhWMDpatWViqDkNQgA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "UnifrakturCook",
   "category": "display",
   "variants": [
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "700": "http://fonts.gstatic.com/s/unifrakturcook/v7/ASwh69ykD8iaoYijVEU6RrWZkcsCTHKV51zmcUsafQ0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "UnifrakturMaguntia",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/unifrakturmaguntia/v6/7KWy3ymCVR_xfAvvcIXm3-kdNg30GQauG_DE-tMYtWk.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Unkempt",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/unkempt/v6/NLLBeNSspr0RGs71R5LHWA.ttf",
    "700": "http://fonts.gstatic.com/s/unkempt/v6/V7H-GCl9bgwGwqFqTTgDHvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Unlock",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/unlock/v5/rXEQzK7uIAlhoyoAEiMy1w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Unna",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/unna/v7/UAS0AM7AmbdCNY_80xyAZQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "VT323",
   "category": "monospace",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/vt323/v6/ITU2YQfM073o1iYK3nSOmQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Vampiro One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/vampiroone/v5/OVDs4gY4WpS5u3Qd1gXRW6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Varela",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/varela/v5/ON7qs0cKUUixhhDFXlZUjw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Varela Round",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/varelaround/v4/APH4jr0uSos5wiut5cpjri3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Vast Shadow",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/vastshadow/v5/io4hqKX3ibiqQQjYfW0-h6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Vesper Libre",
   "category": "serif",
   "variants": [
    "regular",
    "500",
    "700",
    "900"
   ],
   "subsets": [
    "devanagari",
    "latin",
    "latin-ext"
   ],
   "version": "v1",
   "lastModified": "2014-07-17",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/vesperlibre/v1/Cg-TeZFsqV8BaOcoVwzu2C3USBnSvpkopQaUR-2r7iU.ttf",
    "500": "http://themes.googleusercontent.com/static/fonts/vesperlibre/v1/0liLgNkygqH6EOtsVjZDsZMQuUSAwdHsY8ov_6tk1oA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/vesperlibre/v1/0liLgNkygqH6EOtsVjZDsUD2ttfZwueP-QU272T9-k4.ttf",
    "900": "http://themes.googleusercontent.com/static/fonts/vesperlibre/v1/0liLgNkygqH6EOtsVjZDsaObDOjC3UL77puoeHsE3fw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Vibur",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/vibur/v6/xB9aKsUbJo68XP0bAg2iLw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Vidaloka",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/vidaloka/v6/C6Nul0ogKUWkx356rrt9RA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Viga",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/viga/v4/uD87gDbhS7frHLX4uL6agg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Voces",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/voces/v3/QoBH6g6yKgNIgvL8A2aE2Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Volkhov",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/volkhov/v7/MDIZAofe1T_J3un5Kgo8zg.ttf",
    "italic": "http://fonts.gstatic.com/s/volkhov/v7/1rTjmztKEpbkKH06JwF8Yw.ttf",
    "700": "http://fonts.gstatic.com/s/volkhov/v7/L8PbKS-kEoLHm7nP--NCzPesZW2xOQ-xsNqO47m55DA.ttf",
    "700italic": "http://fonts.gstatic.com/s/volkhov/v7/W6oG0QDDjCgj0gmsHE520C3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Vollkorn",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/vollkorn/v4/IiexqYAeh8uII223thYx3w.ttf",
    "italic": "http://themes.googleusercontent.com/static/fonts/vollkorn/v4/UuIzosgR1ovBhJFdwVp3fvesZW2xOQ-xsNqO47m55DA.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/vollkorn/v4/gOwQjJVGXlDOONC12hVoBqCWcynf_cDxXwCLxiixG1c.ttf",
    "700italic": "http://themes.googleusercontent.com/static/fonts/vollkorn/v4/KNiAlx6phRqXCwnZZG51JAJKKGfqHaYFsRG-T3ceEVo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Voltaire",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/voltaire/v4/WvqBzaGEBbRV-hrahwO2cA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Waiting for the Sunrise",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "regular": "http://themes.googleusercontent.com/static/fonts/waitingforthesunrise/v5/eNfH7kLpF1PZWpsetF-ha9TChrNgrDiT3Zy6yGf3FnM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Wallpoet",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/wallpoet/v6/hmum4WuBN4A0Z_7367NDIg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Walter Turncoat",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/walterturncoat/v5/sG9su5g4GXy1KP73cU3hvQplL2YwNeota48DxFlGDUo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Warnes",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/warnes/v5/MXG7_Phj4YpzAXxKGItuBw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Wellfleet",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/wellfleet/v3/J5tOx72iFRPgHYpbK9J4XQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Wendy One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v3",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/wendyone/v3/R8CJT2oDXdMk_ZtuHTxoxw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Wire One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/wireone/v5/sRLhaQOQpWnvXwIx0CycQw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Yanone Kaffeesatz",
   "category": "sans-serif",
   "variants": [
    "200",
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "latin",
    "latin-ext"
   ],
   "version": "v5",
   "lastModified": "2014-01-07",
   "files": {
    "200": "http://themes.googleusercontent.com/static/fonts/yanonekaffeesatz/v5/We_iSDqttE3etzfdfhuPRbq92v6XxU4pSv06GI0NsGc.ttf",
    "300": "http://themes.googleusercontent.com/static/fonts/yanonekaffeesatz/v5/We_iSDqttE3etzfdfhuPRZlIwXPiNoNT_wxzJ2t3mTE.ttf",
    "regular": "http://themes.googleusercontent.com/static/fonts/yanonekaffeesatz/v5/YDAoLskQQ5MOAgvHUQCcLdXn3cHbFGWU4T2HrSN6JF4.ttf",
    "700": "http://themes.googleusercontent.com/static/fonts/yanonekaffeesatz/v5/We_iSDqttE3etzfdfhuPRf2R4S6PlKaGXWPfWpHpcl0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Yellowtail",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/yellowtail/v5/HLrU6lhCTjXfLZ7X60LcB_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Yeseva One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin",
    "latin-ext",
    "cyrillic"
   ],
   "version": "v8",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/yesevaone/v8/eenQQxvpzSA80JmisGcgX_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Yesteryear",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2014-07-10",
   "files": {
    "regular": "http://fonts.gstatic.com/s/yesteryear/v4/dv09hP_ZrdjVOfZQXKXuZvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Zeyada",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2014-07-16",
   "files": {
    "regular": "http://fonts.gstatic.com/s/zeyada/v5/hmonmGYYFwqTZQfG2nRswQ.ttf"
   }
  }
 ]
}'));
}

/**
 * Get google font list of family
 *
 * @uses kopa_google_font_property_list()
 *
 * @since 1.0.0
 */
function kopa_google_font_list() {
	$list = kopa_google_font_property_list();
	$items = $list->items;
	$google_font_options = array();

	foreach ( $items as $item ) {
		$google_font_options[] = $item->family;
	}

	return $google_font_options;
}

/**
 * Get google font options array of key/value pairs
 *
 * @uses kopa_google_font_list()
 * 
 * @since 1.0.0
 */
function kopa_google_font_options() {
	$list = kopa_google_font_list();
	$google_font_options = array();

	foreach ( $list as $item ) {
		$google_font_options[ $item ] = $item;
	}

	return $google_font_options;
}

/**
 * Get google font list of array with all properties
 * 
 * @uses kopa_google_font_property_list()
 *
 * @since 1.0.0
 */
function kopa_google_font_property_list_array() {
	$list = kopa_google_font_property_list();
	$items = $list->items;
	$google_font_options = array();

	foreach ( $items as $item ) {
		$font = array();

		$font['kind'] = $item->kind;
		$font['family'] = $item->family;
		$font['category'] = $item->category;
		$font['variants'] = $item->variants;
		$font['subsets'] = $item->subsets;

		$google_font_options[] = $font;
	}

	return $google_font_options;
}

/**
 * Get system font list
 * 
 * @since 1.0.0
 */
function kopa_system_font_list() {
	/**
	 * Web safe fonts
	 * @see http://www.w3schools.com/cssref/css_websafe_fonts.asp
	 * @see http://cssfontstack.com/
	 * @see http://web.mit.edu/jmorzins/www/fonts.html
	 * @see http://webdesign.about.com/od/fonts/qt/web-safe-fonts.htm
	 */
	return apply_filters( 'kopa_system_font_list', array(
		'Arial, Helvetica, sans-serif',
		'"Arial Black", Gadget, sans-serif',
		'"Comic Sans MS", cursive, sans-serif',
		'Impact, Charcoal, sans-serif',
		'"Lucida Sans Unicode", "Lucida Grande", sans-serif',
		'Tahoma, Geneva, sans-serif',
		'"Trebuchet MS", Helvetica, sans-serif',
		'Verdana, Geneva, sans-serif',
		'Georgia, serif',
		'"Palatino Linotype", "Book Antiqua", Palatino, serif',
		'"Times New Roman", Times, serif',
		'"Courier New", Courier, monospace',
		'"Lucida Console", Monaco, monospace',
	) );
}

/**
 * Get system font options array of key/value pairs
 * 
 * @uses kopa_system_font_list()
 * 
 * @since 1.0.0
 */
function kopa_system_font_options() {
	$list = kopa_system_font_list();
	$system_font_options = array();

	foreach ( $list as $item ) {
		$system_font_options[ $item ] = $item;
	}

	return $system_font_options;
}


/**
 * Get array for localizing of font styles
 *
 * @since 1.0.0
 */
function kopa_font_style_options() {
	return apply_filters( 'kopa_font_style_options', array(
		array (
			'style' => '100',
			'label' => esc_html__( 'Thin', 'kopatheme' ),
		),
		array (
			'style' => '100italic',
			'label' => esc_html__( 'Thin/Italic', 'kopatheme' ),
		),
		array (
			'style' => '200',
			'label' => esc_html__( 'Extra-Light', 'kopatheme' ),
		),
		array (
			'style' => '200italic',
			'label' => esc_html__( 'Extra-Light/Italic', 'kopatheme' ),
		),
		array (
			'style' => '300',
			'label' => esc_html__( 'Light', 'kopatheme' ),
		),
		array (
			'style' => '300italic',
			'label' => esc_html__( 'Light/Italic', 'kopatheme' ),
		),
		array (
			'style' => '400',
			'label' => esc_html__( 'Normal', 'kopatheme' ),
		),
		array (
			'style' => '400italic',
			'label' => esc_html__( 'Normal/Italic', 'kopatheme' ),
		),
		array (
			'style' => 'regular',
			'label' => esc_html__( 'Normal', 'kopatheme' ),
		),
		array (
			'style' => 'italic',
			'label' => esc_html__( 'Normal/Italic', 'kopatheme' ),
		),
		array (
			'style' => '500',
			'label' => esc_html__( 'Medium', 'kopatheme' ),
		),
		array (
			'style' => '500italic',
			'label' => esc_html__( 'Medium/Italic', 'kopatheme' ),
		),
		array (
			'style' => '600',
			'label' => esc_html__( 'Semi-Bold', 'kopatheme' ),
		),
		array (
			'style' => '600italic',
			'label' => esc_html__( 'Semi-Bold/Italic', 'kopatheme' ),
		),
		array (
			'style' => '700',
			'label' => esc_html__( 'Bold', 'kopatheme' ),
		),
		array (
			'style' => '700italic',
			'label' => esc_html__( 'Bold/Italic', 'kopatheme' ),
		),
		array (
			'style' => 'bold',
			'label' => esc_html__( 'Bold', 'kopatheme' ),
		),
		array (
			'style' => 'bolditalic',
			'label' => esc_html__( 'Bold/Italic', 'kopatheme' ),
		),
		array (
			'style' => '800',
			'label' => esc_html__( 'Extra-Bold', 'kopatheme' ),
		),
		array (
			'style' => '800italic',
			'label' => esc_html__( 'Extra-Bold/Italic', 'kopatheme' ),
		),
		array (
			'style' => '900',
			'label' => esc_html__( 'Ultra-Bold', 'kopatheme' ),
		),
		array (
			'style' => '900italic',
			'label' => esc_html__( 'Ultra-Bold/Italic', 'kopatheme' ),
		),
	) );
}

