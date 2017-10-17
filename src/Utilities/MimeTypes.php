<?php

/**
 * (c) Meritoo.pl, http://www.meritoo.pl
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Meritoo\Common\Utilities;

/**
 * Useful methods for mime types of files
 *
 * @author    Krzysztof Niziol <krzysztof.niziol@meritoo.pl>
 * @copyright Meritoo.pl
 */
class MimeTypes
{
    /**
     * Mime types data
     *
     * @var array
     */
    private static $mimeTypes = [
        '7z'        => 'application/x-7z-compressed',
        'ez'        => 'application/andrew-inset',
        'atom'      => 'application/atom+xml',
        'atomcat'   => 'application/atomcat+xml',
        'atomsvc'   => 'application/atomsvc+xml',
        'ccxml'     => 'application/ccxml+xml',
        'davmount'  => 'application/davmount+xml',
        'ecma'      => 'application/ecmascript',
        'pfr'       => 'application/font-tdpfr',
        'stk'       => 'application/hyperstudio',
        'js'        => 'application/javascript',
        'json'      => 'application/json',
        'hqx'       => 'application/mac-binhex40',
        'cpt'       => 'application/mac-compactpro',
        'mrc'       => 'application/marc',
        'ma'        => 'application/mathematica',
        'nb'        => 'application/mathematica',
        'mb'        => 'application/mathematica',
        'mathml'    => 'application/mathml+xml',
        'mbox'      => 'application/mbox',
        'mscml'     => 'application/mediaservercontrol+xml',
        'mp4s'      => 'application/mp4',
        'dot'       => 'application/msword',
        'doc'       => 'application/msword',
        /*
         * MS Office system file format MIME types
         * http://technet.microsoft.com/en-us/library/ee309278%28office.12%29.aspx
         */
        'docx'      => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'mxf'       => 'application/mxf',
        'bin'       => 'application/octet-stream',
        'dms'       => 'application/octet-stream',
        'lha'       => 'application/octet-stream',
        'lzh'       => 'application/octet-stream',
        'class'     => 'application/octet-stream',
        'so'        => 'application/octet-stream',
        'iso'       => 'application/octet-stream',
        'dmg'       => 'application/octet-stream',
        'dist'      => 'application/octet-stream',
        'distz'     => 'application/octet-stream',
        'pkg'       => 'application/octet-stream',
        'bpk'       => 'application/octet-stream',
        'dump'      => 'application/octet-stream',
        'elc'       => 'application/octet-stream',
        'scpt'      => 'application/octet-stream',
        'oda'       => 'application/oda',
        'ogg'       => 'application/ogg',
        'pdf'       => 'application/pdf',
        'pgp'       => 'application/pgp-encrypted',
        'asc'       => 'application/pgp-signature',
        'sig'       => 'application/pgp-signature',
        'prf'       => 'application/pics-rules',
        'p10'       => 'application/pkcs10',
        'p7m'       => 'application/pkcs7-mime',
        'p7c'       => 'application/pkcs7-mime',
        'p7s'       => 'application/pkcs7-signature',
        'cer'       => 'application/pkix-cert',
        'crl'       => 'application/pkix-crl',
        'pkipath'   => 'application/pkix-pkipath',
        'pki'       => 'application/pkixcmp',
        'pls'       => 'application/pls+xml',
        'ai'        => 'application/postscript',
        'eps'       => 'application/postscript',
        'ps'        => 'application/postscript',
        'cww'       => 'application/prs.cww',
        'rdf'       => 'application/rdf+xml',
        'rif'       => 'application/reginfo+xml',
        'rnc'       => 'application/relax-ng-compact-syntax',
        'rl'        => 'application/resource-lists+xml',
        'rs'        => 'application/rls-services+xml',
        'rsd'       => 'application/rsd+xml',
        'rss'       => 'application/rss+xml',
        'rtf'       => 'application/rtf',
        'sbml'      => 'application/sbml+xml',
        'sdp'       => 'application/sdp',
        'setpay'    => 'application/set-payment-initiation',
        'setreg'    => 'application/set-registration-initiation',
        'shf'       => 'application/shf+xml',
        'smi'       => 'application/smil+xml',
        'smil'      => 'application/smil+xml',
        'gram'      => 'application/srgs',
        'grxml'     => 'application/srgs+xml',
        'ssml'      => 'application/ssml+xml',
        'plb'       => 'application/vnd.3gpp.pic-bw-large',
        'psb'       => 'application/vnd.3gpp.pic-bw-small',
        'pvb'       => 'application/vnd.3gpp.pic-bw-var',
        'pwn'       => 'application/vnd.3m.post-it-notes',
        'aso'       => 'application/vnd.accpac.simply.aso',
        'imp'       => 'application/vnd.accpac.simply.imp',
        'acu'       => 'application/vnd.acucobol',
        'atc'       => 'application/vnd.acucorp',
        'acutc'     => 'application/vnd.acucorp',
        'xdp'       => 'application/vnd.adobe.xdp+xml',
        'xfdf'      => 'application/vnd.adobe.xfdf',
        'ami'       => 'application/vnd.amiga.ami',
        'cii'       => 'application/vnd.anser-web-certificate-issue-initiation',
        'fti'       => 'application/vnd.anser-web-funds-transfer-initiation',
        'atx'       => 'application/vnd.antix.game-component',
        'mpkg'      => 'application/vnd.apple.installer+xml',
        'aep'       => 'application/vnd.audiograph',
        'mpm'       => 'application/vnd.blueice.multipass',
        'bmi'       => 'application/vnd.bmi',
        'rep'       => 'application/vnd.businessobjects',
        'cdxml'     => 'application/vnd.chemdraw+xml',
        'mmd'       => 'application/vnd.chipnuts.karaoke-mmd',
        'cdy'       => 'application/vnd.cinderella',
        'cla'       => 'application/vnd.claymore',
        'c4g'       => 'application/vnd.clonk.c4group',
        'c4d'       => 'application/vnd.clonk.c4group',
        'c4f'       => 'application/vnd.clonk.c4group',
        'c4p'       => 'application/vnd.clonk.c4group',
        'c4u'       => 'application/vnd.clonk.c4group',
        'csp'       => 'application/vnd.commonspace',
        'cst'       => 'application/vnd.commonspace',
        'cdbcmsg'   => 'application/vnd.contact.cmsg',
        'cmc'       => 'application/vnd.cosmocaller',
        'clkx'      => 'application/vnd.crick.clicker',
        'clkk'      => 'application/vnd.crick.clicker.keyboard',
        'clkp'      => 'application/vnd.crick.clicker.palette',
        'clkt'      => 'application/vnd.crick.clicker.template',
        'clkw'      => 'application/vnd.crick.clicker.wordbank',
        'wbs'       => 'application/vnd.criticaltools.wbs+xml',
        'pml'       => 'application/vnd.ctc-posml',
        'ppd'       => 'application/vnd.cups-ppd',
        'curl'      => 'application/vnd.curl',
        'rdz'       => 'application/vnd.data-vision.rdz',
        'dna'       => 'application/vnd.dna',
        'mlp'       => 'application/vnd.dolby.mlp',
        'dpg'       => 'application/vnd.dpgraph',
        'dfac'      => 'application/vnd.dreamfactory',
        'mag'       => 'application/vnd.ecowin.chart',
        'nml'       => 'application/vnd.enliven',
        'esf'       => 'application/vnd.epson.esf',
        'msf'       => 'application/vnd.epson.msf',
        'qam'       => 'application/vnd.epson.quickanime',
        'slt'       => 'application/vnd.epson.salt',
        'ssf'       => 'application/vnd.epson.ssf',
        'es3'       => 'application/vnd.eszigno3+xml',
        'et3'       => 'application/vnd.eszigno3+xml',
        'ez2'       => 'application/vnd.ezpix-album',
        'ez3'       => 'application/vnd.ezpix-package',
        'fdf'       => 'application/vnd.fdf',
        'gph'       => 'application/vnd.flographit',
        'ftc'       => 'application/vnd.fluxtime.clip',
        'fm'        => 'application/vnd.framemaker',
        'frame'     => 'application/vnd.framemaker',
        'maker'     => 'application/vnd.framemaker',
        'fnc'       => 'application/vnd.frogans.fnc',
        'ltf'       => 'application/vnd.frogans.ltf',
        'fsc'       => 'application/vnd.fsc.weblaunch',
        'oas'       => 'application/vnd.fujitsu.oasys',
        'oa2'       => 'application/vnd.fujitsu.oasys2',
        'oa3'       => 'application/vnd.fujitsu.oasys3',
        'fg5'       => 'application/vnd.fujitsu.oasysgp',
        'bh2'       => 'application/vnd.fujitsu.oasysprs',
        'ddd'       => 'application/vnd.fujixerox.ddd',
        'xdw'       => 'application/vnd.fujixerox.docuworks',
        'xbd'       => 'application/vnd.fujixerox.docuworks.binder',
        'fzs'       => 'application/vnd.fuzzysheet',
        'txd'       => 'application/vnd.genomatix.tuxedo',
        'kml'       => 'application/vnd.google-earth.kml+xml',
        'kmz'       => 'application/vnd.google-earth.kmz',
        'gqf'       => 'application/vnd.grafeq',
        'gqs'       => 'application/vnd.grafeq',
        'gac'       => 'application/vnd.groove-account',
        'ghf'       => 'application/vnd.groove-help',
        'gim'       => 'application/vnd.groove-identity-message',
        'grv'       => 'application/vnd.groove-injector',
        'gtm'       => 'application/vnd.groove-tool-message',
        'tpl'       => 'application/vnd.groove-tool-template',
        'vcg'       => 'application/vnd.groove-vcard',
        'zmm'       => 'application/vnd.handheld-entertainment+xml',
        'hbci'      => 'application/vnd.hbci',
        'les'       => 'application/vnd.hhe.lesson-player',
        'hpgl'      => 'application/vnd.hp-hpgl',
        'hpid'      => 'application/vnd.hp-hpid',
        'hps'       => 'application/vnd.hp-hps',
        'jlt'       => 'application/vnd.hp-jlyt',
        'pcl'       => 'application/vnd.hp-pcl',
        'pclxl'     => 'application/vnd.hp-pclxl',
        'x3d'       => 'application/vnd.hzn-3d-crossword',
        'mpy'       => 'application/vnd.ibm.minipay',
        'afp'       => 'application/vnd.ibm.modcap',
        'listafp'   => 'application/vnd.ibm.modcap',
        'list3820'  => 'application/vnd.ibm.modcap',
        'irm'       => 'application/vnd.ibm.rights-management',
        'sc'        => 'application/vnd.ibm.secure-container',
        'igl'       => 'application/vnd.igloader',
        'ivp'       => 'application/vnd.immervision-ivp',
        'ivu'       => 'application/vnd.immervision-ivu',
        'xpw'       => 'application/vnd.intercon.formnet',
        'xpx'       => 'application/vnd.intercon.formnet',
        'qbo'       => 'application/vnd.intu.qbo',
        'qfx'       => 'application/vnd.intu.qfx',
        'rcprofile' => 'application/vnd.ipunplugged.rcprofile',
        'irp'       => 'application/vnd.irepository.package+xml',
        'xpr'       => 'application/vnd.is-xpr',
        'jam'       => 'application/vnd.jam',
        'rms'       => 'application/vnd.jcp.javame.midlet-rms',
        'jisp'      => 'application/vnd.jisp',
        'ktz'       => 'application/vnd.kahootz',
        'ktr'       => 'application/vnd.kahootz',
        'karbon'    => 'application/vnd.kde.karbon',
        'chrt'      => 'application/vnd.kde.kchart',
        'kfo'       => 'application/vnd.kde.kformula',
        'flw'       => 'application/vnd.kde.kivio',
        'kon'       => 'application/vnd.kde.kontour',
        'kpr'       => 'application/vnd.kde.kpresenter',
        'kpt'       => 'application/vnd.kde.kpresenter',
        'ksp'       => 'application/vnd.kde.kspread',
        'kwd'       => 'application/vnd.kde.kword',
        'kwt'       => 'application/vnd.kde.kword',
        'htke'      => 'application/vnd.kenameaapp',
        'kia'       => 'application/vnd.kidspiration',
        'kne'       => 'application/vnd.kinar',
        'knp'       => 'application/vnd.kinar',
        'skp'       => 'application/vnd.koan',
        'skd'       => 'application/vnd.koan',
        'skt'       => 'application/vnd.koan',
        'skm'       => 'application/vnd.koan',
        'lbd'       => 'application/vnd.llamagraphics.life-balance.desktop',
        'lbe'       => 'application/vnd.llamagraphics.life-balance.exchange+xml',
        '123'       => 'application/vnd.lotus-1-2-3',
        'apr'       => 'application/vnd.lotus-approach',
        'pre'       => 'application/vnd.lotus-freelance',
        'nsf'       => 'application/vnd.lotus-notes',
        'org'       => 'application/vnd.lotus-organizer',
        'scm'       => 'application/vnd.lotus-screencam',
        'lwp'       => 'application/vnd.lotus-wordpro',
        'portpkg'   => 'application/vnd.macports.portpkg',
        'mcd'       => 'application/vnd.mcd',
        'mc1'       => 'application/vnd.medcalcdata',
        'cdkey'     => 'application/vnd.mediastation.cdkey',
        'mwf'       => 'application/vnd.mfer',
        'mfm'       => 'application/vnd.mfmp',
        'flo'       => 'application/vnd.micrografx.flo',
        'igx'       => 'application/vnd.micrografx.igx',
        'mif'       => 'application/vnd.mif',
        'daf'       => 'application/vnd.mobius.daf',
        'dis'       => 'application/vnd.mobius.dis',
        'mbk'       => 'application/vnd.mobius.mbk',
        'mqy'       => 'application/vnd.mobius.mqy',
        'msl'       => 'application/vnd.mobius.msl',
        'plc'       => 'application/vnd.mobius.plc',
        'txf'       => 'application/vnd.mobius.txf',
        'mpn'       => 'application/vnd.mophun.application',
        'mpc'       => 'application/vnd.mophun.certificate',
        'xul'       => 'application/vnd.mozilla.xul+xml',
        'cil'       => 'application/vnd.ms-artgalry',
        'asf'       => 'application/vnd.ms-asf',
        'cab'       => 'application/vnd.ms-cab-compressed',
        'xls'       => 'application/vnd.ms-excel',
        'xlsx'      => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'xlm'       => 'application/vnd.ms-excel',
        'xla'       => 'application/vnd.ms-excel',
        'xlc'       => 'application/vnd.ms-excel',
        'xlt'       => 'application/vnd.ms-excel',
        'xlw'       => 'application/vnd.ms-excel',
        'eot'       => 'application/vnd.ms-fontobject',
        'chm'       => 'application/vnd.ms-htmlhelp',
        'ims'       => 'application/vnd.ms-ims',
        'lrm'       => 'application/vnd.ms-lrm',
        'ppt'       => 'application/vnd.ms-powerpoint',
        'pptx'      => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
        'pps'       => 'application/vnd.ms-powerpoint',
        'pot'       => 'application/vnd.ms-powerpoint',
        'mpp'       => 'application/vnd.ms-project',
        'mpt'       => 'application/vnd.ms-project',
        'wps'       => 'application/vnd.ms-works',
        'wks'       => 'application/vnd.ms-works',
        'wcm'       => 'application/vnd.ms-works',
        'wdb'       => 'application/vnd.ms-works',
        'wpl'       => 'application/vnd.ms-wpl',
        'xps'       => 'application/vnd.ms-xpsdocument',
        'mseq'      => 'application/vnd.mseq',
        'mus'       => 'application/vnd.musician',
        'nlu'       => 'application/vnd.neurolanguage.nlu',
        'nnd'       => 'application/vnd.noblenet-directory',
        'nns'       => 'application/vnd.noblenet-sealer',
        'nnw'       => 'application/vnd.noblenet-web',
        'ngdat'     => 'application/vnd.nokia.n-gage.data',
        'n-gage'    => 'application/vnd.nokia.n-gage.symbian.install',
        'rpst'      => 'application/vnd.nokia.radio-preset',
        'rpss'      => 'application/vnd.nokia.radio-presets',
        'edm'       => 'application/vnd.novadigm.edm',
        'edx'       => 'application/vnd.novadigm.edx',
        'ext'       => 'application/vnd.novadigm.ext',
        'odc'       => 'application/vnd.oasis.opendocument.chart',
        'otc'       => 'application/vnd.oasis.opendocument.chart-template',
        'odf'       => 'application/vnd.oasis.opendocument.formula',
        'otf'       => 'application/vnd.oasis.opendocument.formula-template',
        'odg'       => 'application/vnd.oasis.opendocument.graphics',
        'otg'       => 'application/vnd.oasis.opendocument.graphics-template',
        'odi'       => 'application/vnd.oasis.opendocument.image',
        'oti'       => 'application/vnd.oasis.opendocument.image-template',
        'odp'       => 'application/vnd.oasis.opendocument.presentation',
        'otp'       => 'application/vnd.oasis.opendocument.presentation-template',
        'ods'       => 'application/vnd.oasis.opendocument.spreadsheet',
        'ots'       => 'application/vnd.oasis.opendocument.spreadsheet-template',
        'odt'       => 'application/vnd.oasis.opendocument.text',
        'otm'       => 'application/vnd.oasis.opendocument.text-master',
        'ott'       => 'application/vnd.oasis.opendocument.text-template',
        'oth'       => 'application/vnd.oasis.opendocument.text-web',
        'xo'        => 'application/vnd.olpc-sugar',
        'dd2'       => 'application/vnd.oma.dd2+xml',
        'oxt'       => 'application/vnd.openofficeorg.extension',
        'dp'        => 'application/vnd.osgi.dp',
        'prc'       => 'application/vnd.palm',
        'pdb'       => 'application/vnd.palm',
        'pqa'       => 'application/vnd.palm',
        'oprc'      => 'application/vnd.palm',
        'str'       => 'application/vnd.pg.format',
        'ei6'       => 'application/vnd.pg.osasli',
        'efif'      => 'application/vnd.picsel',
        'plf'       => 'application/vnd.pocketlearn',
        'pbd'       => 'application/vnd.powerbuilder6',
        'box'       => 'application/vnd.previewsystems.box',
        'mgz'       => 'application/vnd.proteus.magazine',
        'qps'       => 'application/vnd.publishare-delta-tree',
        'ptid'      => 'application/vnd.pvi.ptid1',
        'qxd'       => 'application/vnd.quark.quarkxpress',
        'qxt'       => 'application/vnd.quark.quarkxpress',
        'qwd'       => 'application/vnd.quark.quarkxpress',
        'qwt'       => 'application/vnd.quark.quarkxpress',
        'qxl'       => 'application/vnd.quark.quarkxpress',
        'qxb'       => 'application/vnd.quark.quarkxpress',
        'mxl'       => 'application/vnd.recordare.musicxml',
        'rm'        => 'application/vnd.rn-realmedia',
        'see'       => 'application/vnd.seemail',
        'sema'      => 'application/vnd.sema',
        'semd'      => 'application/vnd.semd',
        'semf'      => 'application/vnd.semf',
        'ifm'       => 'application/vnd.shana.informed.formdata',
        'itp'       => 'application/vnd.shana.informed.formtemplate',
        'iif'       => 'application/vnd.shana.informed.interchange',
        'ipk'       => 'application/vnd.shana.informed.package',
        'twd'       => 'application/vnd.simtech-mindmapper',
        'twds'      => 'application/vnd.simtech-mindmapper',
        'mmf'       => 'application/vnd.smaf',
        'sdkm'      => 'application/vnd.solent.sdkm+xml',
        'sdkd'      => 'application/vnd.solent.sdkm+xml',
        'dxp'       => 'application/vnd.spotfire.dxp',
        'sfs'       => 'application/vnd.spotfire.sfs',
        'sus'       => 'application/vnd.sus-calendar',
        'susp'      => 'application/vnd.sus-calendar',
        'svd'       => 'application/vnd.svd',
        'xsm'       => 'application/vnd.syncml+xml',
        'bdm'       => 'application/vnd.syncml.dm+wbxml',
        'xdm'       => 'application/vnd.syncml.dm+xml',
        'tao'       => 'application/vnd.tao.intent-module-archive',
        'tmo'       => 'application/vnd.tmobile-livetv',
        'tpt'       => 'application/vnd.trid.tpt',
        'mxs'       => 'application/vnd.triscape.mxs',
        'tra'       => 'application/vnd.trueapp',
        'ufd'       => 'application/vnd.ufdl',
        'ufdl'      => 'application/vnd.ufdl',
        'utz'       => 'application/vnd.uiq.theme',
        'umj'       => 'application/vnd.umajin',
        'unityweb'  => 'application/vnd.unity',
        'uoml'      => 'application/vnd.uoml+xml',
        'vcx'       => 'application/vnd.vcx',
        'vsd'       => 'application/vnd.visio',
        'vst'       => 'application/vnd.visio',
        'vss'       => 'application/vnd.visio',
        'vsw'       => 'application/vnd.visio',
        'vis'       => 'application/vnd.visionary',
        'vsf'       => 'application/vnd.vsf',
        'wbxml'     => 'application/vnd.wap.wbxml',
        'wmlc'      => 'application/vnd.wap.wmlc',
        'wmlsc'     => 'application/vnd.wap.wmlscriptc',
        'wtb'       => 'application/vnd.webturbo',
        'wpd'       => 'application/vnd.wordperfect',
        'wqd'       => 'application/vnd.wqd',
        'stf'       => 'application/vnd.wt.stf',
        'xar'       => 'application/vnd.xara',
        'xfdl'      => 'application/vnd.xfdl',
        'hvd'       => 'application/vnd.yamaha.hv-dic',
        'hvs'       => 'application/vnd.yamaha.hv-script',
        'hvp'       => 'application/vnd.yamaha.hv-voice',
        'saf'       => 'application/vnd.yamaha.smaf-audio',
        'spf'       => 'application/vnd.yamaha.smaf-phrase',
        'cmp'       => 'application/vnd.yellowriver-custom-menu',
        'zaz'       => 'application/vnd.zzazz.deck+xml',
        'vxml'      => 'application/voicexml+xml',
        'hlp'       => 'application/winhlp',
        'wsdl'      => 'application/wsdl+xml',
        'wspolicy'  => 'application/wspolicy+xml',
        'ace'       => 'application/x-ace-compressed',
        'bcpio'     => 'application/x-bcpio',
        'torrent'   => 'application/x-bittorrent',
        'bz'        => 'application/x-bzip',
        'bz2'       => 'application/x-bzip2',
        'boz'       => 'application/x-bzip2',
        'vcd'       => 'application/x-cdlink',
        'chat'      => 'application/x-chat',
        'pgn'       => 'application/x-chess-pgn',
        'cpio'      => 'application/x-cpio',
        'csh'       => 'application/x-csh',
        'dcr'       => 'application/x-director',
        'dir'       => 'application/x-director',
        'dxr'       => 'application/x-director',
        'fgd'       => 'application/x-director',
        'dvi'       => 'application/x-dvi',
        'spl'       => 'application/x-futuresplash',
        'gtar'      => 'application/x-gtar',
        'hdf'       => 'application/x-hdf',
        'jnlp'      => 'application/x-java-jnlp-file',
        'latex'     => 'application/x-latex',
        'wmd'       => 'application/x-ms-wmd',
        'wmz'       => 'application/x-ms-wmz',
        'mdb'       => 'application/x-msaccess',
        'obd'       => 'application/x-msbinder',
        'crd'       => 'application/x-mscardfile',
        'clp'       => 'application/x-msclip',
        'exe'       => 'application/x-msdownload',
        'dll'       => 'application/x-msdownload',
        'com'       => 'application/x-msdownload',
        'bat'       => 'application/x-msdownload',
        'msi'       => 'application/x-msdownload',
        'mvb'       => 'application/x-msmediaview',
        'm13'       => 'application/x-msmediaview',
        'm14'       => 'application/x-msmediaview',
        'wmf'       => 'application/x-msmetafile',
        'mny'       => 'application/x-msmoney',
        'pub'       => 'application/x-mspublisher',
        'scd'       => 'application/x-msschedule',
        'trm'       => 'application/x-msterminal',
        'wri'       => 'application/x-mswrite',
        'nc'        => 'application/x-netcdf',
        'cdf'       => 'application/x-netcdf',
        'p12'       => 'application/x-pkcs12',
        'pfx'       => 'application/x-pkcs12',
        'p7b'       => 'application/x-pkcs7-certificates',
        'spc'       => 'application/x-pkcs7-certificates',
        'p7r'       => 'application/x-pkcs7-certreqresp',
        'rar'       => 'application/x-rar-compressed',
        'sh'        => 'application/x-sh',
        'shar'      => 'application/x-shar',
        'swf'       => 'application/x-shockwave-flash',
        'sit'       => 'application/x-stuffit',
        'sitx'      => 'application/x-stuffitx',
        'sv4cpio'   => 'application/x-sv4cpio',
        'sv4crc'    => 'application/x-sv4crc',
        'tar'       => 'application/x-tar',
        'tcl'       => 'application/x-tcl',
        'tex'       => 'application/x-tex',
        'texinfo'   => 'application/x-texinfo',
        'texi'      => 'application/x-texinfo',
        'ustar'     => 'application/x-ustar',
        'src'       => 'application/x-wais-source',
        'der'       => 'application/x-x509-ca-cert',
        'crt'       => 'application/x-x509-ca-cert',
        'xenc'      => 'application/xenc+xml',
        'xhtml'     => 'application/xhtml+xml',
        'xht'       => 'application/xhtml+xml',
        'xml'       => 'application/xml',
        'xsl'       => 'application/xml',
        'dtd'       => 'application/xml-dtd',
        'xop'       => 'application/xop+xml',
        'xslt'      => 'application/xslt+xml',
        'xspf'      => 'application/xspf+xml',
        'mxml'      => 'application/xv+xml',
        'xhvml'     => 'application/xv+xml',
        'xvml'      => 'application/xv+xml',
        'xvm'       => 'application/xv+xml',
        'zip'       => 'application/zip',
        'au'        => 'audio/basic',
        'snd'       => 'audio/basic',
        'mid'       => 'audio/midi',
        'midi'      => 'audio/midi',
        'kar'       => 'audio/midi',
        'rmi'       => 'audio/midi',
        'mp4a'      => 'audio/mp4',
        'm4a'       => 'audio/mp4a-latm',
        'm4p'       => 'audio/mp4a-latm',
        'mpga'      => 'audio/mpeg',
        'mp2'       => 'audio/mpeg',
        'mp2a'      => 'audio/mpeg',
        'mp3'       => 'audio/mpeg',
        'm2a'       => 'audio/mpeg',
        'm3a'       => 'audio/mpeg',
        'eol'       => 'audio/vnd.digital-winds',
        'lvp'       => 'audio/vnd.lucent.voice',
        'ecelp4800' => 'audio/vnd.nuera.ecelp4800',
        'ecelp7470' => 'audio/vnd.nuera.ecelp7470',
        'ecelp9600' => 'audio/vnd.nuera.ecelp9600',
        'wav'       => 'audio/wav',
        'aif'       => 'audio/x-aiff',
        'aiff'      => 'audio/x-aiff',
        'aifc'      => 'audio/x-aiff',
        'm3u'       => 'audio/x-mpegurl',
        'wax'       => 'audio/x-ms-wax',
        'wma'       => 'audio/x-ms-wma',
        'ram'       => 'audio/x-pn-realaudio',
        'ra'        => 'audio/x-pn-realaudio',
        'rmp'       => 'audio/x-pn-realaudio-plugin',
        'cdx'       => 'chemical/x-cdx',
        'cif'       => 'chemical/x-cif',
        'cmdf'      => 'chemical/x-cmdf',
        'cml'       => 'chemical/x-cml',
        'csml'      => 'chemical/x-csml',
        'xyz'       => 'chemical/x-xyz',
        'bmp'       => 'image/bmp',
        'cgm'       => 'image/cgm',
        'g3'        => 'image/g3fax',
        'gif'       => 'image/gif',
        'ief'       => 'image/ief',
        'jp2'       => 'image/jp2',
        'jpeg'      => 'image/jpeg',
        'jpe'       => 'image/jpeg',
        'jpg'       => 'image/jpeg',
        'pict'      => 'image/pict',
        'pic'       => 'image/pict',
        'pct'       => 'image/pict',
        'png'       => 'image/png',
        'btif'      => 'image/prs.btif',
        'svg'       => 'image/svg+xml',
        'svgz'      => 'image/svg+xml',
        'tiff'      => 'image/tiff',
        'tif'       => 'image/tiff',
        'psd'       => 'image/vnd.adobe.photoshop',
        'djvu'      => 'image/vnd.djvu',
        'djv'       => 'image/vnd.djvu',
        'dwg'       => 'image/vnd.dwg',
        'dxf'       => 'image/vnd.dxf',
        'fbs'       => 'image/vnd.fastbidsheet',
        'fpx'       => 'image/vnd.fpx',
        'fst'       => 'image/vnd.fst',
        'mmr'       => 'image/vnd.fujixerox.edmics-mmr',
        'rlc'       => 'image/vnd.fujixerox.edmics-rlc',
        'ico'       => 'image/vnd.microsoft.icon',
        'mdi'       => 'image/vnd.ms-modi',
        'npx'       => 'image/vnd.net-fpx',
        'wbmp'      => 'image/vnd.wap.wbmp',
        'xif'       => 'image/vnd.xiff',
        'ras'       => 'image/x-cmu-raster',
        'cmx'       => 'image/x-cmx',
        'pntg'      => 'image/x-macpaint',
        'pnt'       => 'image/x-macpaint',
        'mac'       => 'image/x-macpaint',
        'pcx'       => 'image/x-pcx',
        'pnm'       => 'image/x-portable-anymap',
        'pbm'       => 'image/x-portable-bitmap',
        'pgm'       => 'image/x-portable-graymap',
        'ppm'       => 'image/x-portable-pixmap',
        'qtif'      => 'image/x-quicktime',
        'qti'       => 'image/x-quicktime',
        'rgb'       => 'image/x-rgb',
        'xbm'       => 'image/x-xbitmap',
        'xpm'       => 'image/x-xpixmap',
        'xwd'       => 'image/x-xwindowdump',
        'eml'       => 'message/rfc822',
        'mime'      => 'message/rfc822',
        'igs'       => 'model/iges',
        'iges'      => 'model/iges',
        'msh'       => 'model/mesh',
        'mesh'      => 'model/mesh',
        'silo'      => 'model/mesh',
        'dwf'       => 'model/vnd.dwf',
        'gdl'       => 'model/vnd.gdl',
        'gtw'       => 'model/vnd.gtw',
        'mts'       => 'model/vnd.mts',
        'vtu'       => 'model/vnd.vtu',
        'wrl'       => 'model/vrml',
        'vrml'      => 'model/vrml',
        'ics'       => 'text/calendar',
        'ifb'       => 'text/calendar',
        'css'       => 'text/css',
        'csv'       => 'text/csv',
        'html'      => 'text/html',
        'htm'       => 'text/html',
        'txt'       => 'text/plain',
        'text'      => 'text/plain',
        'conf'      => 'text/plain',
        'def'       => 'text/plain',
        'list'      => 'text/plain',
        'log'       => 'text/plain',
        'in'        => 'text/plain',
        'dsc'       => 'text/prs.lines.tag',
        'rtx'       => 'text/richtext',
        'sgml'      => 'text/sgml',
        'sgm'       => 'text/sgml',
        'tsv'       => 'text/tab-separated-values',
        't'         => 'text/troff',
        'tr'        => 'text/troff',
        'roff'      => 'text/troff',
        'man'       => 'text/troff',
        'me'        => 'text/troff',
        'ms'        => 'text/troff',
        'uri'       => 'text/uri-list',
        'uris'      => 'text/uri-list',
        'urls'      => 'text/uri-list',
        'fly'       => 'text/vnd.fly',
        'flx'       => 'text/vnd.fmi.flexstor',
        '3dml'      => 'text/vnd.in3d.3dml',
        'spot'      => 'text/vnd.in3d.spot',
        'jad'       => 'text/vnd.sun.j2me.app-descriptor',
        'wml'       => 'text/vnd.wap.wml',
        'wmls'      => 'text/vnd.wap.wmlscript',
        's'         => 'text/x-asm',
        'asm'       => 'text/x-asm',
        'c'         => 'text/x-c',
        'cc'        => 'text/x-c',
        'cxx'       => 'text/x-c',
        'cpp'       => 'text/x-c',
        'h'         => 'text/x-c',
        'hh'        => 'text/x-c',
        'dic'       => 'text/x-c',
        'f'         => 'text/x-fortran',
        'for'       => 'text/x-fortran',
        'f77'       => 'text/x-fortran',
        'f90'       => 'text/x-fortran',
        'p'         => 'text/x-pascal',
        'pas'       => 'text/x-pascal',
        'java'      => 'text/x-java-source',
        'etx'       => 'text/x-setext',
        'uu'        => 'text/x-uuencode',
        'vcs'       => 'text/x-vcalendar',
        'vcf'       => 'text/x-vcard',
        '3gp'       => 'video/3gpp',
        '3g2'       => 'video/3gpp2',
        'h261'      => 'video/h261',
        'h263'      => 'video/h263',
        'h264'      => 'video/h264',
        'jpgv'      => 'video/jpeg',
        'jpm'       => 'video/jpm',
        'jpgm'      => 'video/jpm',
        'mj2'       => 'video/mj2',
        'mjp2'      => 'video/mj2',
        'mp4'       => 'video/mp4',
        'mp4v'      => 'video/mp4',
        'mpg4'      => 'video/mp4',
        'm4v'       => 'video/mp4',
        'mpeg'      => 'video/mpeg',
        'mpg'       => 'video/mpeg',
        'mpe'       => 'video/mpeg',
        'm1v'       => 'video/mpeg',
        'm2v'       => 'video/mpeg',
        'qt'        => 'video/quicktime',
        'mov'       => 'video/quicktime',
        'fvt'       => 'video/vnd.fvt',
        'mxu'       => 'video/vnd.mpegurl',
        'm4u'       => 'video/vnd.mpegurl',
        'viv'       => 'video/vnd.vivo',
        'dv'        => 'video/x-dv',
        'dif'       => 'video/x-dv',
        'fli'       => 'video/x-fli',
        'asx'       => 'video/x-ms-asf',
        'wm'        => 'video/x-ms-wm',
        'wmv'       => 'video/x-ms-wmv',
        'wmx'       => 'video/x-ms-wmx',
        'wvx'       => 'video/x-ms-wvx',
        'avi'       => 'video/x-msvideo',
        'movie'     => 'video/x-sgi-movie',
        'ice'       => 'x-conference/x-cooltalk',
    ];

    /**
     * Returns extensions for given mimes types
     *
     * @param array $mimesTypes  The mimes types, e.g. ['video/mpeg', 'image/jpeg']
     * @param bool  $asUpperCase (optional) If is set to true, extensions are returned as upper case. Otherwise - lower
     *                           case.
     * @return array
     */
    public static function getExtensions(array $mimesTypes, $asUpperCase = false)
    {
        if (empty($mimesTypes)) {
            return [];
        }

        $extensions = [];

        foreach ($mimesTypes as $mimeType) {
            $extension = self::getExtension($mimeType);

            /*
             * No extension for given mime type?
             * Nothing to do
             */
            if (empty($extension)) {
                continue;
            }

            /*
             * Extensions should be returned as upper case?
             */
            if ($asUpperCase) {
                if (is_array($extension)) {
                    array_walk($extension, function (&$value) {
                        $value = strtoupper($value);
                    });
                } else {
                    $extension = strtoupper($extension);
                }
            }

            $extensions[$mimeType] = $extension;
        }

        return $extensions;
    }

    /**
     * Returns extension for given mime type
     *
     * @param string $mimeType The mime type, e.g. "video/mpeg"
     * @return string|array
     */
    public static function getExtension($mimeType)
    {
        if (is_string($mimeType) && in_array($mimeType, self::$mimeTypes)) {
            $data = Arrays::setKeysAsValues(self::$mimeTypes, false);

            return $data[$mimeType];
        }

        return '';
    }

    /**
     * Returns information whether file with the given path is an image
     *
     * @param string $path Path of the file to check
     * @return bool
     */
    public static function isImagePath($path)
    {
        $mimeType = self::getMimeType($path);

        return self::isImage($mimeType);
    }

    /**
     * Returns mime type of given file
     *
     * @param string $filePath Path of the file to check
     * @return string
     *
     * @throws \RuntimeException
     */
    public static function getMimeType($filePath)
    {
        /*
         * The file does not exist?
         * Nothing to do
         */
        if (!is_string($filePath) || !is_readable($filePath)) {
            return '';
        }

        /*
         * 1st possibility: the finfo class
         */
        if (class_exists('finfo')) {
            $finfo = new \finfo();

            return $finfo->file($filePath, FILEINFO_MIME_TYPE);
        }

        /*
         * 2nd possibility: the mime_content_type function
         */
        if (function_exists('mime_content_type')) {
            return mime_content_type($filePath);
        }

        /*
         * Oops, there is no possibility to read the mime type
         */
        $template = 'Neither \'finfo\' class nor \'mime_content_type\' function exists. There is no way to read the'
            . ' mime type of file \'%s\'.';

        $message = sprintf($template, $filePath);
        throw new \RuntimeException($message);
    }

    /**
     * Returns information whether the given file type is an image
     *
     * @param string $mimeType The mime type of file
     * @return bool
     */
    public static function isImage($mimeType)
    {
        if (in_array($mimeType, self::$mimeTypes)) {
            return (bool)preg_match('|^image/.+$|', $mimeType);
        }

        return false;
    }
}