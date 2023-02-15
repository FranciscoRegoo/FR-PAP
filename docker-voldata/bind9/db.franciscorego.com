;
; BIND data file for local loopback interface
;
$TTL	604800
@	IN	SOA	ns.franciscorego.com. admin.franciscorego.localhost. (
			      2		; Serial
			 604800		; Refresh
			  86400		; Retry
			2419200		; Expire
			 604800		; Negative Cache TTL
)
				
; NS Records

@	IN	NS	ns.franciscorego.com.

; A Records

ns	IN	A	172.168.20.253			;DNS

lb 	IN	A	172.168.20.10 			;LoadBalancer
www	IN	A	172.168.20.10			;LoadBalancer

ws1	IN	A	172.168.10.11 			;WebServer1
ws2	IN	A	172.168.10.12 			;WebServer2

wp	IN	A	172.168.10.15			;Wordpress

db	IN	A	172.168.20.200			;MariaDB
pma	IN	A	172.168.20.201			;PhpMyAdmin


sftp	IN	A	172.168.20.150		;sFTP

portainer	IN	A	172.168.20.254	;Portainer
