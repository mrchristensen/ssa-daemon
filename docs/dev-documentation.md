## Purpose 
This README is to help explain to developers how to make changes to the SSA and where those changes should happen.

This README is a WIP and can be changed as needed.

## Adding to the SSA Admin Configuration File

To add different options to the administrator configuration file (ssa.cfg or ssa.conf) the following steps need to be followed. 

1. Add the appropiate flag to the ssa_config_t struct found in config.h.
2. Add a case in config.c in the function config.c that captures what the setting name is.
3. Set the appropiate flag based on the parsing in config.c

For example, if I wanted to add a value called foo to the configuration file, and have its value be set to bar, I would have to add the following.
1. In config.c add a ```char* foo ```to the ssa_config_t struct
2. Go to add_setting function in config.c and add an else if (STR_MATCH(name, "foo"))...
3. Set the config->foo value to be whatever value was found (in this case bar)
