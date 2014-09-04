require 'yaml'

Vagrant.configure("2") do |config|

	config.vm.box = "jansauer/centos7-core"
	config.vm.network 'private_network', ip: '192.168.8.22'
	config.ssh.forward_agent = true

	config.vm.provision 'ansible' do |ansible|
		ansible.limit = 'all'
		ansible.playbook = 'ansible/vagrant.yml'
		ansible.inventory_path = 'ansible/inventories/dev'
		ansible.verbose = false

		file = File.open(Dir.getwd + "/ansible/group_vars/dev.yml")
		vars = YAML.load( file.read )
		file.close

		if Vagrant.has_plugin?("vagrant-hostsupdater")
		 config.vm.hostname = vars['server_name']
		 config.hostsupdater.aliases = vars['server_aliases']
		end

	end

end