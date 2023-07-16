package io.github.poolborges.sample.resource.model;

import io.github.poolborges.sample.data.Organization;
import java.util.List;

/**
 *
 * @author poolb
 */
public class OrganizationsModel extends CollectionModel<Organization>{
    
    public OrganizationsModel(List<Organization> items){
        super(items);
    }
}
