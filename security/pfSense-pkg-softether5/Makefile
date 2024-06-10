# $FreeBSD$

PORTNAME=	pfSense-pkg-softether5
PORTVERSION=	5.02
PORTREVISION=	2
CATEGORIES=	security net-vpn
MASTER_SITES=	# empty
DISTFILES=	# empty
EXTRACT_ONLY=	# empty

MAINTAINER=	stexe@systemfailure.it
COMMENT=	pfSense package softether5

LICENSE=	APACHE20

RUN_DEPENDS=	softether5>=5.02:security/softether5 \
		cpu_features>=0.9.0:devel/cpu_features

NO_BUILD=	yes
NO_MTREE=	yes

SUB_FILES=	pkg-install pkg-deinstall
SUB_LIST=	PORTNAME=${PORTNAME}

do-extract:
	${MKDIR} ${WRKSRC}

do-install:
	${MKDIR} ${STAGEDIR}${PREFIX}/pkg
	${MKDIR} ${STAGEDIR}${PREFIX}/etc
	${MKDIR} ${STAGEDIR}${PREFIX}/etc/rc.d
	${MKDIR} ${STAGEDIR}${PREFIX}/www
	${MKDIR} ${STAGEDIR}${DATADIR}
	${INSTALL_DATA} -m 0644 ${FILESDIR}${PREFIX}/pkg/softether5.xml \
		${STAGEDIR}${PREFIX}/pkg
	${INSTALL_DATA} -m 0755 ${FILESDIR}${PREFIX}/etc/rc.d/vpnserver.sh \
		${STAGEDIR}${PREFIX}/etc/rc.d
	${INSTALL_DATA} -m 0755 ${FILESDIR}${PREFIX}/etc/rc.d/vpnbridge.sh \
		${STAGEDIR}${PREFIX}/etc/rc.d
	${INSTALL_DATA} ${FILESDIR}${PREFIX}/www/vpn_softether5_server.php \
		${STAGEDIR}${PREFIX}/www
	${INSTALL_DATA} ${FILESDIR}${PREFIX}/www/vpn_softether5_bridge.php \
		${STAGEDIR}${PREFIX}/www
	${INSTALL_DATA} ${FILESDIR}${DATADIR}/info.xml \
		${STAGEDIR}${DATADIR}
	@${REINPLACE_CMD} -i '' -e "s|%%PKGVERSION%%|${PKGVERSION}|" \
		${STAGEDIR}${DATADIR}/info.xml \
		${STAGEDIR}${PREFIX}/pkg/softether5.xml

.include <bsd.port.mk>
