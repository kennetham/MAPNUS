MAPNUS
=========

MAPNUS aims to provide students with a One Stop Guide around NUS with better visualization and information.

  - Convenient & Knowledgable
  - Lightweight
  - Effective & Efficient

MAPNUS is a lightweight map based application designed specifically for the _National University of Singapore_ that empower students by facilitating a wide range of features to find locations around NUS more effective & efficiently.

Version
----

0.3

Technologies
-----------

MAPNUS uses a number of open source projects & technologies to work properly:

- [Atom] - a hackable text editor for the 21st Century
- [IntelliJ IDEA] - work miracles on Java and beyond
- [Twitter Bootstrap] - great UI boilerplate for modern web apps
- [Leaflet.js] - a customized leaflet map plugin
- [Scala] - mapnus api web service that sits as an interface between web presentation and database
- [Ruby] - automated script to process data into database
- [Redis Database] - advanced key-value store
- [Apache Tomcat] - server pages technologies
- [Bitnami] - one click application stack for easy deployment anywhere
- [Microsoft Windows Azure] - awesome cloud hosting platform
- [jQuery]
- html5

Getting Started
--------------
All services are hosted on Microsoft Windows Azure Platform.

__Webfront__ : MAPNUS Web is hosted on '_Microsoft Windows Azure Websites_' deployed from _GitHub_.

__Service__ : MAPNUS API Web Service is the service __backbone__ architecture of the system.

MAPNUS API Web Service is written in `Scala` and is hosted on Microsoft Windows Azure - Virtual Machines running on `Apache Tomcat`.

__Database__ : MAPNUS stores and retrieves information from `Redis DB` and is hosted on Microsoft Windows Azure - Virtual Machines.

>##### The services have been configured for load balancing and scalability.

>##### Content Delivery Network (CDN) to deliver high-bandwidth content by caching contents on various servers around the world

__Webfront__ scales up to `4` instances if the _CPU_ metrics meets a certain threshold.

__Database__ is configured with `master & slave` configuration on `2` Virtual Machines.

__Sharding__ allows data replication across the database servers. Should any database fail at any one point, there is a secondary database to support the system.


Installation
--------------

>###### _Disclaimer_: Although the following setup is configured for __*Microsoft Windows Azure*__ platform deployment, however, the same configuration can also be deployed on any other server _not including_ any Cloud Hosting platforms as they have specific configuration settings.

- __Deploying Redis DB on Windows Azure - Virtual Machine__

  To create a new Virtual Machine, use the '_New_' menu at the bottom left of the portal, select `Virtual Machine` > `From Gallery`.

![alt text](https://mapnus.blob.core.windows.net/github-readme/images/redisdb_vmstep_01.png "Create a Virtual Machine")

- __Choose an Image__

  Following which, the Virtual Machine Wizard will open, displaying a number of base Operating System options to choose from.

  Select `CentOS-Based` > `OpenLogic` distribution and click '_next_' to continue.

![alt text](https://mapnus.blob.core.windows.net/github-readme/images/redisdb_vmstep_02.png "Choose an Image")

  This screen allows us to start configuring our Virtual Machine:
  * Virtual Machine Name
  * Tier and Size of Computing Power
  * New User Name
  * Authentication, either SSH Key for authentication or password.

Opting to upload SSH Key for authentication will automatically install the SSH Key onto the user account, providing the ability to connect via SSH configured with the corresponding private key

![alt text](https://mapnus.blob.core.windows.net/github-readme/images/redisdb_vmstep_03.png "Virtual Machine Configuration")

- __Virtual Machine Configuration__
  The next screen configures the cloud service
  * Define your '_Cloud_ _Service_ _DNS_ _Name_', `<cloud_service_dns_name>.cloudapp.net`
  * Region (eg. _Southeast Asia_)
  * Storage Account where the VHD image will be saved to
  * Availability Set configures `'N'` Virtual Machines to the set for the following reasons:
    * `99.95% SLA`
    * `High availability`
    * `Load Balancing`
  * Endpoints configuration to expose Redis DB ports to public

![alt text](https://mapnus.blob.core.windows.net/github-readme/images/redisdb_vmstep_04.png "Virtual Machine Configuration")

- __Ready, Set, Go!__
  Finally, the last step will validate the settings and start your virtual machine.

![alt text](https://mapnus.blob.core.windows.net/github-readme/images/redisdb_vmstep_05.png "Virtual Machine Configuration")

`The following configurations can be customized for any types of application deployments.`

---

### Virtual Machine Provisioned & Running

- SSH into Virtual Machine

 Login into the Virtual Machine

```console
mapnus:~ localuser$ ssh azureuser@redisdbsg.cloudapp.net
azureuser@redisdbsg.cloudapp.net's password:
```

Once you have successfully SSH into your Virtual Machine, run the following commands

```console
[azureuser@redisdbsg ~]$ uname -a
Linux redisdbsg 2.6.32-431.17.1.el6.x86_64 #1 SMP Wed May 7 23:32:49 UTC 2014 x86_64 x86_64 x86_64 GNU/Linux
[azureuser@redisdbsg ~]$ echo "Hello Azure" > /dev/null
[azureuser@redisdbsg ~]$
```
---
### Installing Redis

- Install Development Tools

 + First start by installing development tools `sudo yum groupinstall "Development tools"`
 + `sudo` command will require you to enter a password. Enter the password you created for the user account
 + Now, let's download, compile and install _Redis_

```console
[azureuser@redisdbsg ~]$ sudo yum groupinstall "Development tools"
[azureuser@redisdbsg ~]$ wget http://download.redis.io/releases/redis-2.8.13.tar.gz
[azureuser@redisdbsg ~]$ tar xzf redis-2.8.13.tar.gz
[azureuser@redisdbsg ~]$ cd redis-2.8.13
[azureuser@redisdbsg redis-2.8.13]$ make
[azureuser@redisdbsg redis-2.8.13]$ sudo make install
```

- Run Redis Database with Configuration file

```console
[azureuser@redisdbsg]$ sudo /usr/local/bin/redis-server redisconf/redisdb.conf
```

>##### You're all set! Redis database is now accessible to the world, run a test to make sure your configurations are working.

---

### Installing Apache Tomcat
(_For Advanced Users_)

>###### _Disclaimer_: Any attempt to modify or change any settings could potentially cause failure(s) and(or) service disruption(s) to Apache Tomcat Servers' execution.
>###### Unless you are fully aware of the implications of the modification, the following settings should be handled with due care.

Apache Tomcat on Windows Azure is a customized stack provided by _[Bitnami]_. Using the same procedure, create a new Virtual Machine for hosting Tomcat.

_Bitnami_ stack comes with Apache Tomcat pre-installed into the Virtual Machine. There are lesser installations to be done here.

In this example, we will use `bitnami-tomcat`

>##### Remember to configure your endpoints to expose Tomcat's port to be accesible by __public__

- SSH into Virtual Machine

 Login into Virtual Machine

```console
mapnus:~ localuser$ ssh azureuser@bitnami-tomcat.cloudapp.net
azureuser@bitnami-tomcat.cloudapp.net's password:
```

Once you have logged in, you will see the following screen, let's setup our Tomcat server.

```console
Welcome to Ubuntu 14.04.1 LTS (GNU/Linux 3.13.0-32-generic x86_64)
       ___ _ _                   _
      | _ |_) |_ _ _  __ _ _ __ (_)
      | _ \ |  _| ' \/ _` | '  \| |
      |___/_|\__|_|_|\__,_|_|_|_|_|

  *** Welcome to the Bitnami Tomcat 7.0.55-0        ***
  *** Bitnami Wiki:   http://wiki.bitnami.com/      ***
  *** Bitnami Forums: http://community.bitnami.com/ ***
[azureuser@bitnami-tomcat]$ cd stack/apache-tomcat/conf
azureuser@bitnami-tomcat:~/stack/apache-tomcat/conf$
```

- Configure the ports that would be mapped to __*Endpoints*__ to be exposed
 + _Uncomment_ the following line to enable Tomcat Server port to be accessible on the web
 + Save and quit `nano`
 + Go to _Windows Azure Portal_ and map the port as the following

>##### Name: `Tomcat`

>##### Protocol: `TCP`

>##### Public Port: `80`

>##### Private Port: `8080`

```console
azureuser@bitnami-tomcat:~/stack/apache-tomcat/conf$ sudo nano server.xml
<!-- A "Connector" represents an endpoint by which requests are received
         and responses are returned. Documentation at :
         Java HTTP Connector: /docs/config/http.html (blocking & non-blocking)
         Java AJP  Connector: /docs/config/ajp.html
         APR (HTTP/AJP) Connector: /docs/apr.html
         Define a non-SSL HTTP/1.1 Connector on port 8080
    -->

    <Connector port="8080" URIEncoding="UTF-8" protocol="HTTP/1.1" connectionTimeout="20000" redirectPort="8443"/>
azureuser@bitnami-tomcat:~/stack/apache-tomcat/conf$
```

- Change the default username & password for security reasons

```console
azureuser@bitnami-tomcat:~/stack/apache-tomcat/conf$ sudo nano tomcat-users.xml
<user username="azureuser" password="my_very_secure_password" roles="manager-gui,admin-gui"/>
</tomcat-users>
azureuser@bitnami-tomcat:~/stack/apache-tomcat/conf$
```

- Ensure that Tomcat Server is running
 + `sudo ./ctlscript.sh (start|stop|restart|status) apache`
 + `sudo ./ctlscript.sh (start|stop|restart|status) mysql`
 + `sudo ./ctlscript.sh (start|stop|restart|status) tomcat`
- To stop all __running__ services `sudo ./ctlscript.sh stop`

```console
azureuser@bitnami-tomcat:~/stack$ sudo ./ctlscript.sh start tomcat
tomcat already running
azureuser@bitnami-tomcat:~/stack$
```

- Let's deploy our Scala war file.
 + Upload __WAR__ file to the Virtual Machine
 + Open your _web browser_ to _http://bitnami-tomcat.cloudapp.net/manager/html_
 + Enter your Tomcat Credentials you set earlier
 + Select _Deploy directory or WAR file located on server_
   + Configure the following settings and set the path to `root '/'`

>##### Context Path (required): `/`

>##### XML Configuration file or URL: `(omit if irrelevant)`

>##### WAR or Directory URL: `/home/bitnami/<your_war_filename>.war`
##### '_if file has been uploaded to the Virtual Machine file directory_'

![alt text](https://mapnus.blob.core.windows.net/github-readme/images/wardeploy.png "WAR File Deploy")

Once it's deployed, you can validate it by accessing it from the public url

>##### You're all set! Apache Tomcat is now accessible to the world!

>##### Open your _web browser_ to _http://bitnami-tomcat.cloudapp.net_ to test if it's running!


### Compiling Scala Project

- Package _Scala_ project into __WAR__ file
- Change to your project directory
- __WAR__ file is located in your project directory under `'target/scala-X.XX'`

```scala
mapnus:~ localuser$ cd TomcatApp
mapnus:TomcatApp localuser$
mapnus:TomcatApp localuser$ sbt clean compile
mapnus:TomcatApp localuser$ sbt package
mapnus:TomcatApp localuser$ cd target/scala-2.10
mapnus:scala-2.10 localuser$
```


### Running our Ruby Automated Scripts

- `automate_db.rb` : runs text data, crunch the data and push to database
- Change to our Ruby DB directory
- Run the following command and output our results to `json.out` file

```ruby
mapnus:~ localuser$ cd db
mapnus:db localuser$ ruby automated_db.rb > json.out
```

License
-----------

[MIT](./LICENSE).

Copyright (c) 2014 Kenneth Ham & Jireh Tan.

[Atom]:http://atom.io
[IntelliJ IDEA]:http://www.jetbrains.com/idea
[Twitter Bootstrap]:http://twitter.github.com/bootstrap/
[Leaflet.js]:http://leafletjs.com
[Scala]:http://scala-lang.org
[Ruby]:http://ruby-lang.org
[Redis Database]:http://redis.io
[jQuery]:http://jquery.com
[Apache Tomcat]:http://tomcat.apache.org
[Bitnami]:https://bitnami.com
[Microsoft Windows Azure]:http://windowsazure.com
