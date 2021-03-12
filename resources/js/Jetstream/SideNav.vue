<template>
  <div class=" m-5 text-gray-100 text-lg font-semibold  space-y-3">
                        <side-nav-link :href="route('dashboard')" :active="route().current('dashboard')" 
                            class="p-3 hover:bg-gray-200 hover:text-red-700 rounded cursor-pointer flex items-center space-x-5">
                                <dashboard-icon/>
                                <div class=""> 
                                        Dashboard
                                </div>
                        </side-nav-link>
                        <side-nav-link :href="route('projects')" :active="route().current('projects')" 
                            class="p-3 hover:bg-gray-200 hover:text-red-700 rounded cursor-pointer flex items-center space-x-5">
                                 <projects-icon class="w-7"/>
                                <div class=""> 
                                        Projects
                                </div>
                        </side-nav-link>
                        <side-nav-link :href="route('tasks')" :active="route().current('tasks')" 
                            class="p-3 hover:bg-gray-200 hover:text-red-700 rounded cursor-pointer flex items-center space-x-5">
                                 <dashboard-icon/>
                                <div class=""> 
                                        Tasks
                                </div>
                        </side-nav-link>
                        <side-nav-link :href="route('employees')" :active="route().current('employees')" 
                            class="p-3 hover:bg-gray-200 hover:text-red-700 rounded cursor-pointer flex items-center space-x-5">
                                 <employee-icon class="w-7"/>
                                <div class=""> 
                                        Employees
                                </div>
                        </side-nav-link>
                        <side-nav-link :href="route('appointments')" :active="route().current('appointments')" 
                            class="p-3 hover:bg-gray-200 hover:text-red-700 rounded cursor-pointer flex items-center space-x-5">
                                <dashboard-icon/>
                                <div class=""> 
                                        Appointments
                                </div>
                        </side-nav-link>
                    </div>  
</template>

<script>
    import { DashboardIcon, EmployeeIcon, ProjectsIcon } from '@/Icons/index'
    import SideNavLink from '@/Jetstream/SideNavLink'

    export default {
        components: {
          DashboardIcon, 
          EmployeeIcon, 
          ProjectsIcon,
          SideNavLink,
        },
    }
</script>